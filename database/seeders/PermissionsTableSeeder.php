<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = new Permission;
        $permission->name='view_work_requests';
        $permission->save();

        $permission = new Permission;
        $permission->name='view_planned_work_orders';
        $permission->save();

        $permission = new Permission;
        $permission->name='view_failure_work_orders';
        $permission->save();

        $permission = new Permission;
        $permission->name='view_machine_details';
        $permission->save();

       
    }
}
