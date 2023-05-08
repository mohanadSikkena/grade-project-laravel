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
        $workType->name ='Corrective';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='Breakdown';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='Predictive';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='Inspection';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='Preventive';
        $workType->save();

        $workType = new WorkType;
        $workType->name ='Reimbursable';
        $workType->save();

    }
}
