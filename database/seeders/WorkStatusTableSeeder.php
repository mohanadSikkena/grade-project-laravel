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
        $workStatus->name ='open';
        $workStatus->save();

        $workStatus = new WorkStatus;
        $workStatus->name ='closed';
        $workStatus->save();

        $workStatus = new WorkStatus;
        $workStatus->name ='cancelled';
        $workStatus->save();

        $workStatus = new WorkStatus;
        $workStatus->name ='waiting';
        $workStatus->save();

    }
}
