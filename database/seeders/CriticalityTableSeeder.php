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
        $criticality->name ='crit 1';
        $criticality->save();

        $criticality = new Criticality;
        $criticality->name ='crit 2';
        $criticality->save();

        $criticality = new Criticality;
        $criticality->name ='crit 3';
        $criticality->save();

        $criticality = new Criticality;
        $criticality->name ='crit 4';
        $criticality->save();

        $criticality = new Criticality;
        $criticality->name ='crit 5';
        $criticality->save();

        $criticality = new Criticality;
        $criticality->name ='crit 6';
        $criticality->save();

        $criticality = new Criticality;
        $criticality->name ='crit 7';
        $criticality->save();

        $criticality = new Criticality;
        $criticality->name ='crit 8';
        $criticality->save();

        $criticality = new Criticality;
        $criticality->name ='crit 9';
        $criticality->save();

    }
}
