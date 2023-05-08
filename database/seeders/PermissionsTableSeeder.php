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
        /* requests */
        $permission = new Permission; //1
        $permission->name='all_work_requests';
        $permission->save();

        $permission = new Permission;//2
        $permission->name='create_work_requests';
        $permission->save();

        $permission = new Permission;//3
        $permission->name='delete_work_requests';
        $permission->save();

        $permission = new Permission;//4
        $permission->name='edit_work_requests';
        $permission->save();

        $permission = new Permission;//5
        $permission->name='user_work_requests';
        $permission->save();

        /* work order */
        $permission = new Permission;//6
        $permission->name='all_work_orders';
        $permission->save();

        $permission = new Permission;//7
        $permission->name='create_work_orders';
        $permission->save();

        $permission = new Permission;//8
        $permission->name='delete_work_orders';
        $permission->save();

        $permission = new Permission;//9
        $permission->name='edit_work_orders';
        $permission->save();

        $permission = new Permission;//10
        $permission->name='user_work_orders';
        $permission->save();

        /* machines */
        $permission = new Permission;//11
        $permission->name='all_machine_details';
        $permission->save();

        $permission = new Permission;//12
        $permission->name='create_machine_details';
        $permission->save();

        $permission = new Permission;//13
        $permission->name='delete_machine_details';
        $permission->save();

        $permission = new Permission;//14
        $permission->name='edit_machine_details';
        $permission->save();

        $permission = new Permission;//15
        $permission->name='user_machine_details';
        $permission->save();

        /* users */
        $permission = new Permission;//16
        $permission->name='all_users_details';
        $permission->save();

        $permission = new Permission;//17
        $permission->name='create_users_details';
        $permission->save();

        $permission = new Permission;//18
        $permission->name='delete_users_details';
        $permission->save();

        $permission = new Permission;//19
        $permission->name='edit_users_details';
        $permission->save();

        }
}
