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
        $department->name ='Mechanical';
        $department->save();

        $department = new Department;
        $department->name ='Electrical';
        $department->save();
    }
}
