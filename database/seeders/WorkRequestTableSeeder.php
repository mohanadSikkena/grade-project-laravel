<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WorkRequest;

class WorkRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workRequest = new WorkRequest;
        $workRequest-> problem_description= 'problem_description 1';
        $workRequest-> machine_id= '1';
        $workRequest-> requster_id= '1';
        $workRequest->save();

        $workRequest = new WorkRequest;
        $workRequest-> problem_description= 'problem_description 2';
        $workRequest-> machine_id= '2';
        $workRequest-> requster_id= '2';
        $workRequest->save();

        $workRequest = new WorkRequest;
        $workRequest-> problem_description= 'problem_description 3';
        $workRequest-> machine_id= '3';
        $workRequest-> requster_id= '3';
        $workRequest->save();

        $workRequest = new WorkRequest;
        $workRequest-> problem_description= 'problem_description 4';
        $workRequest-> machine_id= '4';
        $workRequest-> requster_id= '4';
        $workRequest->save();

        $workRequest = new WorkRequest;
        $workRequest-> problem_description= 'problem_description 5';
        $workRequest-> machine_id= '5';
        $workRequest-> requster_id= '5';
        $workRequest->save();

        $workRequest = new WorkRequest;
        $workRequest-> problem_description= 'problem_description 6';
        $workRequest-> machine_id= '6';
        $workRequest-> requster_id= '6';
        $workRequest->save();

        $workRequest = new WorkRequest;
        $workRequest-> problem_description= 'problem_description 7';
        $workRequest-> machine_id= '7';
        $workRequest-> requster_id= '7';
        $workRequest->save();

        $workRequest = new WorkRequest;
        $workRequest-> problem_description= 'problem_description 8';
        $workRequest-> machine_id= '8';
        $workRequest-> requster_id= '8';
        $workRequest->save();

        $workRequest = new WorkRequest;
        $workRequest-> problem_description= 'problem_description 9';
        $workRequest-> machine_id= '9';
        $workRequest-> requster_id= '9';
        $workRequest->save();

        }
}
