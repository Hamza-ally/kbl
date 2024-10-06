<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('customer_id')->references('id')->on('customers')->onUpdate('restrict')->onDelete('restrict');
            $table->string('serial_number');
            $table->enum('type', ['high', 'medium', 'low']);
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
