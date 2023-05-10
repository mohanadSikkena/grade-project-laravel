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
        $workPriority->name ='normal';
        $workPriority->save();

        $workPriority = new WorkPriority;
        $workPriority->name ='urgent';
        $workPriority->save();

        $workPriority = new WorkPriority;
        $workPriority->name ='emergency';
        $workPriority->save();

        $workPriority = new WorkPriority;
        $workPriority->name ='routine';
        $workPriority->save();
        }
}
