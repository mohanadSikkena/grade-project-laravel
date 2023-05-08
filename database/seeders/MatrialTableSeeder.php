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
        $matrial-> name = 'Hydraulic pump';
        $matrial-> spare_part_id = '1';
        $matrial-> location_id = '1';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '1';
        $matrial-> quantity = '10';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Filter';
        $matrial-> spare_part_id = '2';
        $matrial-> location_id = '2';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '1';
        $matrial-> quantity = '200';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Hydraulic pump for cooling';
        $matrial-> spare_part_id = '3';
        $matrial-> location_id = '3';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '1';
        $matrial-> quantity = '30';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Relife valve';
        $matrial-> spare_part_id = '4';
        $matrial-> location_id = '4';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '1';
        $matrial-> quantity = '400';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Direction control valve 4/2';
        $matrial-> spare_part_id = '5';
        $matrial-> location_id = '5';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '1';
        $matrial-> quantity = '500';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'polit Check valve';
        $matrial-> spare_part_id = '6';
        $matrial-> location_id = '6';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '1';
        $matrial-> quantity = '600';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Check valve';
        $matrial-> spare_part_id = '7';
        $matrial-> location_id = '7';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '1';
        $matrial-> quantity = '700';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = '2-way flow control valve';
        $matrial-> spare_part_id = '8';
        $matrial-> location_id = '8';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '1';
        $matrial-> quantity = '800';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Throttle valve';
        $matrial-> spare_part_id = '9';
        $matrial-> location_id = '9';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '1';
        $matrial-> quantity = '900';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Circuit Breaker';
        $matrial-> spare_part_id = '1';
        $matrial-> location_id = '10';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '2';
        $matrial-> quantity = '10';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Overload- 3 Ph';
        $matrial-> spare_part_id = '2';
        $matrial-> location_id = '2';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '2';
        $matrial-> quantity = '200';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Transformer';
        $matrial-> spare_part_id = '3';
        $matrial-> location_id = '3';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '2';
        $matrial-> quantity = '30';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Contactor- 3 Ph';
        $matrial-> spare_part_id = '4';
        $matrial-> location_id = '4';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '2';
        $matrial-> quantity = '400';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Air Timer-NO';
        $matrial-> spare_part_id = '5';
        $matrial-> location_id = '5';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '2';
        $matrial-> quantity = '500';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Contactor helping points';
        $matrial-> spare_part_id = '6';
        $matrial-> location_id = '6';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '2';
        $matrial-> quantity = '6000';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Fuse - 3 Ph';
        $matrial-> spare_part_id = '7';
        $matrial-> location_id = '7';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '2';
        $matrial-> quantity = '700';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Fuse - 1 Ph';
        $matrial-> spare_part_id = '8';
        $matrial-> location_id = '8';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '2';
        $matrial-> quantity = '800';
        $matrial->save();

        $matrial = new Matrial;
        $matrial-> name = 'Fuse - 2 Ph';
        $matrial-> spare_part_id = '9';
        $matrial-> location_id = '9';
        $matrial-> criticality_id = '1';
        $matrial-> category_id = '2';
        $matrial-> quantity = '900';
        $matrial->save();



}
}
