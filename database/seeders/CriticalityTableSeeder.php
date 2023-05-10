<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Criticality;

class CriticalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $criticality = new Criticality;
        $criticality->name ='Critical';
        $criticality->save();

        $criticality = new Criticality;
        $criticality->name ='Normal';
        $criticality->save();

    }
}
