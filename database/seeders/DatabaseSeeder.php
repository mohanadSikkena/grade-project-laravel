<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LocationTableSeeder::class,
            RolesTableSeeder::class,
            CategoryTableSeeder::class,
            CriticalityTableSeeder::class,
            DepartmentTableSeeder::class,
            MachineCodeTableSeeder::class,
            WorkPriorityTableSeeder::class,
            SparePartTableSeeder::class,
            MatrialTableSeeder::class,
            WorkStatusTableSeeder::class,
            WorkTradeTableSeeder::class,
            WorkTypeTableSeeder::class,
            UserTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            MachineTableSeeder::class,
            WorkOrderTableSeeder::class,
            WorkRequestTableSeeder::class,
            

        ]);
    }
}
