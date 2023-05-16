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
        Schema::create('spare_parts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->foreignId('location_id');
            $table->foreignId('priority_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('location_id')->references('id')->on('locations')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('priority_id')->references('id')->on('work_priorities')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spare_parts');
    }
};
