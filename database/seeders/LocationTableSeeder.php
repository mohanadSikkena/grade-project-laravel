<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $location = new Location;
        $location->location_description ='B1';
        $location->save();

        $location = new Location;
        $location->location_description ='B2';
        $location->save();

        $location = new Location;
        $location->location_description ='B3';
        $location->save();

        $location = new Location;
        $location->location_description ='A1';
        $location->save();

        $location = new Location;
        $location->location_description ='A2';
        $location->save();

        $location = new Location;
        $location->location_description ='A3';
        $location->save();

    }
}
