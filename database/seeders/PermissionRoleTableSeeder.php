<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PermissionRole;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // maneger
        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 1;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 2;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 3;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 4;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 5;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 6;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 7;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 8;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 9;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 10;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 11;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 12;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 13;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 14;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 15;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 16;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 17;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 18;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 19;
        $permissionRole->role_id= 1;
        $permissionRole->save();
        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 20;
        $permissionRole->role_id= 1;
        $permissionRole->save();

        // coordinator
        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 1;
        $permissionRole->role_id= 2;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 5;
        $permissionRole->role_id= 2;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 7;
        $permissionRole->role_id= 2;
        $permissionRole->save();

        // engineer
        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 1;
        $permissionRole->role_id= 3;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 7;
        $permissionRole->role_id= 3;
        $permissionRole->save();

        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 10;
        $permissionRole->role_id= 3;
        $permissionRole->save();

        // worker
        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 2;
        $permissionRole->role_id= 4;
        $permissionRole->save();

        // technician
        $permissionRole = new PermissionRole;
        $permissionRole->permission_id= 10;
        $permissionRole->role_id= 5;
        $permissionRole->save();

    }
}
