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
            UserTableSeeder::class,
            LocationTableSeeder::class,
            CategoryTableSeeder::class,
            CriticalityTableSeeder::class,
            DepartmentTableSeeder::class,
            MachineCodeTableSeeder::class,
            MachineTableSeeder::class,
            MatrialTableSeeder::class,
            SparePartTableSeeder::class,
            WorkPriorityTableSeeder::class,
            WorkOrderTableSeeder::class,
            WorkRequestTableSeeder::class,
            WorkStatusTableSeeder::class,
            WorkTradeTableSeeder::class,
            WorkTypeTableSeeder::class,
        ]);
    }
}
