<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SparePart;

class SparePartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sparePart = new SparePart;
        $sparePart-> name = 'Control Panel';
        $sparePart-> location_id = '1';
        $sparePart-> priority_id = '1';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Operting Panel';
        $sparePart-> location_id = '2';
        $sparePart-> priority_id = '2';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Cutting Control Pedal';
        $sparePart-> location_id = '3';
        $sparePart-> priority_id = '3';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'SMain Engine Pump';
        $sparePart-> location_id = '4';
        $sparePart-> priority_id = '1';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Hydraulic power unit';
        $sparePart-> location_id = '5';
        $sparePart-> priority_id = '2';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Oil Tank';
        $sparePart-> location_id = '6';
        $sparePart-> priority_id = '4';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Right Hydraulic Cylinder for shear';
        $sparePart-> location_id = '7';
        $sparePart-> priority_id = '2';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Left Hydraulic Cylinder for shear';
        $sparePart-> location_id = '8';
        $sparePart-> priority_id = '2';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Hold-Down for shear';
        $sparePart-> location_id = '9';
        $sparePart-> priority_id = '1';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Rear Reference';
        $sparePart-> location_id = '9';
        $sparePart-> priority_id = '1';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Motorization of the back gauge';
        $sparePart-> location_id = '9';
        $sparePart-> priority_id = '2';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Upper Blade';
        $sparePart-> location_id = '9';
        $sparePart-> priority_id = '3';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Lower Blade';
        $sparePart-> location_id = '9';
        $sparePart-> priority_id = '3';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'Air Compressed Unit';
        $sparePart-> location_id = '9';
        $sparePart-> priority_id = '2';
        $sparePart-> quantity = '1000';
        $sparePart->save();

    }
}
