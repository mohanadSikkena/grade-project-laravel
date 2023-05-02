<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matrial;

class MatrialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matrial = new Matrial;
        $matrial-> name = 'matrial 1';
        $matrial-> spare_part_id = '1';
        $matrial-> location_id = '1';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '1';
        $matrial-> quantity = '1000';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'matrial 2';
        $matrial-> spare_part_id = '2';
        $matrial-> location_id = '2';
        $matrial-> criticality_id = '2';
        $matrial-> category_id = '2';
        $matrial-> quantity = '200000';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'matrial 3';
        $matrial-> spare_part_id = '3';
        $matrial-> location_id = '3';
        $matrial-> criticality_id = '3';
        $matrial-> category_id = '3';
        $matrial-> quantity = '3000000';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'matrial 4';
        $matrial-> spare_part_id = '4';
        $matrial-> location_id = '4';
        $matrial-> criticality_id = '4';
        $matrial-> category_id = '4';
        $matrial-> quantity = '40000000';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'matrial 5';
        $matrial-> spare_part_id = '5';
        $matrial-> location_id = '5';
        $matrial-> criticality_id = '5';
        $matrial-> category_id = '5';
        $matrial-> quantity = '50000';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'matrial 6';
        $matrial-> spare_part_id = '6';
        $matrial-> location_id = '6';
        $matrial-> criticality_id = '6';
        $matrial-> category_id = '6';
        $matrial-> quantity = '600000';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'matrial 7';
        $matrial-> spare_part_id = '7';
        $matrial-> location_id = '7';
        $matrial-> criticality_id = '7';
        $matrial-> category_id = '7';
        $matrial-> quantity = '70000';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'matrial 8';
        $matrial-> spare_part_id = '8';
        $matrial-> location_id = '8';
        $matrial-> criticality_id = '8';
        $matrial-> category_id = '8';
        $matrial-> quantity = '80000';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'matrial 9';
        $matrial-> spare_part_id = '9';
        $matrial-> location_id = '9';
        $matrial-> criticality_id = '9';
        $matrial-> category_id = '9';
        $matrial-> quantity = '9000';
        $matrial->save();

}
}
