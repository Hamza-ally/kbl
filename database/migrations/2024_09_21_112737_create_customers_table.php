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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('creator_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('last_editor_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->string('name', 26);
            $table->string('email', 26);
            $table->string('contact', 16);
            $table->string('cnic', 16);
            $table->string('conn_id', 22);
            $table->enum('package_type', ['basic', 'premium', 'enterprise']);
            $table->string('city', 22);
            $table->string('address', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
