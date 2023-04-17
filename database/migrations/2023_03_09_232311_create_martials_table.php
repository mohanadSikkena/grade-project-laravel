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
        Schema::create('martials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->foreignId('spare_part_id');
            $table->foreignId('location_id');
            $table->foreignId('criticality_id');
            $table->foreignId('category_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('spare_part_id')->references('id')->on('spare_parts')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('location_id')->references('id')->on('locations')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('criticality_id')->references('id')->on('criticals')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('martials');
    }
};
