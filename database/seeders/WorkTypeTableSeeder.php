<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WorkType;

class WorkTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workType = new WorkType;
        $workType->name ='W_Type 1';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='W_Type 2';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='W_Type 3';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='W_Type 4';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='W_Type 5';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='W_Type 6';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='W_Type 7';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='W_Type 8';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='W_Type 9';
        $workType->save();

    }
}
