<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WorkStatus;

class WorkStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workStatus = new WorkStatus;
        $workStatus->name ='W_Status 1';
        $workStatus->save();

        $workStatus = new WorkStatus;
        $workStatus->name ='W_Status 2';
        $workStatus->save();

        $workStatus = new WorkStatus;
        $workStatus->name ='W_Status 3';
        $workStatus->save();

        $workStatus = new WorkStatus;
        $workStatus->name ='W_Status 4';
        $workStatus->save();

        $workStatus = new WorkStatus;
        $workStatus->name ='W_Status 5';
        $workStatus->save();

        $workStatus = new WorkStatus;
        $workStatus->name ='W_Status 6';
        $workStatus->save();

        $workStatus = new WorkStatus;
        $workStatus->name ='W_Status 7';
        $workStatus->save();

        $workStatus = new WorkStatus;
        $workStatus->name ='W_Status 8';
        $workStatus->save();

        $workStatus = new WorkStatus;
        $workStatus->name ='W_Status 9';
        $workStatus->save();

    }
}
