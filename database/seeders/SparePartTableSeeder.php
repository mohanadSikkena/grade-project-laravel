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
        $sparePart-> name = 'SparePart 1';
        $sparePart-> location_id = '1';
        $sparePart-> priority_id = '1';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'SparePart 2';
        $sparePart-> location_id = '2';
        $sparePart-> priority_id = '2';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'SparePart 3';
        $sparePart-> location_id = '3';
        $sparePart-> priority_id = '3';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'SparePart 4';
        $sparePart-> location_id = '4';
        $sparePart-> priority_id = '4';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'SparePart 5';
        $sparePart-> location_id = '5';
        $sparePart-> priority_id = '5';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'SparePart 6';
        $sparePart-> location_id = '6';
        $sparePart-> priority_id = '6';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'SparePart 7';
        $sparePart-> location_id = '7';
        $sparePart-> priority_id = '7';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'SparePart 8';
        $sparePart-> location_id = '8';
        $sparePart-> priority_id = '8';
        $sparePart-> quantity = '1000';
        $sparePart->save();

        $sparePart = new SparePart;
        $sparePart-> name = 'SparePart 9';
        $sparePart-> location_id = '9';
        $sparePart-> priority_id = '9';
        $sparePart-> quantity = '1000';
        $sparePart->save();

    }
}
