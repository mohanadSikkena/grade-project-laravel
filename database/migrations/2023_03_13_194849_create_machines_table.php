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
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->nullable();
            $table->string('description', 255)->nullable();
            $table->foreignId('location_id');
            $table->string('machine_model', 150);
            $table->string('manfacturer', 50);
            $table->foreignId('user_id');
            $table->foreignId('department_id');
            $table->foreignId('category_id');
            $table->string('contractor', 50);
            $table->foreignId('status_id');
            $table->string('serial_number');
            $table->string('supplier', 50);
            $table->foreignId('criticality_id');
            $table->string('notes_to_technection', 255)->nullable();
            $table->date('contract_expiry_date');
            $table->foreignId('machine_code_id');
            $table->string('requirements', 255)->nullable();
            $table->timestamps();
            $table->foreign('location_id')->references('id')->on('locations')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('status_id')->references('id')->on('work_statuses')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('criticality_id')->references('id')->on('criticalities')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('machine_code_id')->references('id')->on('machine_codes')->onUpdate('CASCADE')->onDelete('RESTRICT');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machines');
    }
};
