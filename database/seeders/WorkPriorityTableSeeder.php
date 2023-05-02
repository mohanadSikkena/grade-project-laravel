<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WorkPriority;

class WorkPriorityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workPriority = new WorkPriority;
        $workPriority->name ='W_Priority 1';
        $workPriority->save();

        $workPriority = new WorkPriority;
        $workPriority->name ='W_Priority 2';
        $workPriority->save();

        $workPriority = new WorkPriority;
        $workPriority->name ='W_Priority 3';
        $workPriority->save();

        $workPriority = new WorkPriority;
        $workPriority->name ='W_Priority 4';
        $workPriority->save();

        $workPriority = new WorkPriority;
        $workPriority->name ='W_Priority 5';
        $workPriority->save();

        $workPriority = new WorkPriority;
        $workPriority->name ='W_Priority 6';
        $workPriority->save();

        $workPriority = new WorkPriority;
        $workPriority->name ='W_Priority 7';
        $workPriority->save();

        $workPriority = new WorkPriority;
        $workPriority->name ='W_Priority 8';
        $workPriority->save();

        $workPriority = new WorkPriority;
        $workPriority->name ='W_Priority 9';
        $workPriority->save();

        }
}
