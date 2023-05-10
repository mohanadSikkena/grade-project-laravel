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
        $location->location_description ='A1';
        $location->save();

        $location = new Location;
        $location->location_description ='B2';
        $location->save();

        $location = new Location;
        $location->location_description ='B3';
        $location->save();

        $location = new Location;
        $location->location_description ='B4';
        $location->save();

        $location = new Location;
        $location->location_description ='B5';
        $location->save();

        $location = new Location;
        $location->location_description ='B6';
        $location->save();

        $location = new Location;
        $location->location_description ='B7';
        $location->save();

        $location = new Location;
        $location->location_description ='B8';
        $location->save();

        $location = new Location;
        $location->location_description ='B9';
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

        $location = new Location;
        $location->location_description ='A4';
        $location->save();

        $location = new Location;
        $location->location_description ='A5';
        $location->save();

        $location = new Location;
        $location->location_description ='A6';
        $location->save();

        $location = new Location;
        $location->location_description ='A7';
        $location->save();

        $location = new Location;
        $location->location_description ='A8';
        $location->save();

        $location = new Location;
        $location->location_description ='A9';
        $location->save();

    }
}
