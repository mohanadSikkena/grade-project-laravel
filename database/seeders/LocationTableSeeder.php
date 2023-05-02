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
        $location->location_description ='location 1';
        $location->save();

        $location = new Location;
        $location->location_description ='location 2';
        $location->save();

        $location = new Location;
        $location->location_description ='location 3';
        $location->save();

        $location = new Location;
        $location->location_description ='location 4';
        $location->save();

        $location = new Location;
        $location->location_description ='location 5';
        $location->save();

        $location = new Location;
        $location->location_description ='location 6';
        $location->save();

        $location = new Location;
        $location->location_description ='location 7';
        $location->save();

        $location = new Location;
        $location->location_description ='location 8';
        $location->save();

        $location = new Location;
        $location->location_description ='location 9';
        $location->save();

    }
}
