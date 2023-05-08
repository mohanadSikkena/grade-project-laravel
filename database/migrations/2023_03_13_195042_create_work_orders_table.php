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
        Schema::create('work_orders', function (Blueprint $table) {
            $table->id();
            $table->string('problem_description', 255)->nullable();
            $table->foreignId('work_status_id')->nullable();
            $table->foreignId('work_type_id')->nullable();
            $table->foreignId('work_trade_id')->nullable();
            $table->foreignId('machine_id');
            $table->foreignId('requster_id')->nullable();
            $table->foreignId('work_priority_id')->nullable();
            $table->foreignId('assign_to');
            $table->string('failure_cause', 20)->nullable();
            $table->date('received_date')->nullable();
            $table->string('requirements', 255)->nullable();
            $table->timestamps();
            $table->foreign('work_status_id')->references('id')->on('work_statuses')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('work_type_id')->references('id')->on('work_types')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('work_trade_id')->references('id')->on('work_trades')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('machine_id')->references('id')->on('machines')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('requster_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('work_priority_id')->references('id')->on('work_priorities')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('assign_to')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_orders');
    }
};
