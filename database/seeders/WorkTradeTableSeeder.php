<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WorkTrade;

class WorkTradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workTrade = new WorkTrade;
        $workTrade->name ='mechanical';
        $workTrade->save();

        $workTrade = new WorkTrade;
        $workTrade->name ='electriacl';
        $workTrade->save();

    }
}
