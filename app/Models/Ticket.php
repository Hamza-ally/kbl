<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Psr\Log\LoggerInterface;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'customer_id',
        'serial_number',
        'type',
        'address',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            try {
                // Use a transaction to ensure atomicity and avoid race conditions
                DB::transaction(function () use ($model) {
                    // Lock the serials table for update to prevent race conditions
                    $lastSerial = DB::table('serials')->lockForUpdate()->max('serial_number');

                    // If no serial exists, start at 1
                    $newSerial = ($lastSerial === null) ? 1 : (int) $lastSerial + 1;

                    // Pad the serial number with leading zeros to ensure it's always 8 characters
                    $serialNumber = str_pad($newSerial, 8, '0', STR_PAD_LEFT);

                    // Assign the generated serial number to the serial_number field in the model
                    $model->serial_number = $serialNumber;

                    // Check if there is an existing serial in the table
                    $serialExists = DB::table('serials')->exists();

                    if ($serialExists) {
                        // If a serial exists, update the existing row
                        DB::table('serials')->update(['serial_number' => $serialNumber]);
                    } else {
                        // If no serial exists, insert the first one
                        DB::table('serials')->insert(['serial_number' => $serialNumber]);
                    }
                });
            } catch (QueryException $e) {
                // Log the error if something goes wrong during the transaction
                app(LoggerInterface::class)->error('Error generating serial number: ' . $e->getMessage());

                // Re-throw the exception to prevent further processing
                throw $e;
            }
        });
    }
}
