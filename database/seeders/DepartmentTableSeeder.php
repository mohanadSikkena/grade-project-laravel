<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $department = new Department;
        $department->name ='depart 1';
        $department->save();

        $department = new Department;
        $department->name ='depart 2';
        $department->save();

        $department = new Department;
        $department->name ='depart 3';
        $department->save();

        $department = new Department;
        $department->name ='depart 4';
        $department->save();

        $department = new Department;
        $department->name ='depart 5';
        $department->save();

        $department = new Department;
        $department->name ='depart 6';
        $department->save();

        $department = new Department;
        $department->name ='depart 7';
        $department->save();

        $department = new Department;
        $department->name ='depart 8';
        $department->save();

        $department = new Department;
        $department->name ='depart 9';
        $department->save();

    }
}
