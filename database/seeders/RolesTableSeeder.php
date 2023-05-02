<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = new Role;
        $role-> name = 'manger';
        $role->save();

        $role = new Role;
        $role-> name = 'coordinator';
        $role->save();

        $role = new Role;
        $role-> name = 'engineer';
        $role->save();

        $role = new Role;
        $role-> name = 'worker';
        $role->save();

        $role = new Role;
        $role-> name = 'technician';
        $role->save();
    }
}
