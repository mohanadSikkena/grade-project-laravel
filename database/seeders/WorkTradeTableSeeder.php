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
        $workTrade->name ='W_Trade 1';
        $workTrade->save();

        $workTrade = new WorkTrade;
        $workTrade->name ='W_Trade 2';
        $workTrade->save();

        $workTrade = new WorkTrade;
        $workTrade->name ='W_Trade 3';
        $workTrade->save();

        $workTrade = new WorkTrade;
        $workTrade->name ='W_Trade 4';
        $workTrade->save();

        $workTrade = new WorkTrade;
        $workTrade->name ='W_Trade 5';
        $workTrade->save();

        $workTrade = new WorkTrade;
        $workTrade->name ='W_Trade 6';
        $workTrade->save();

        $workTrade = new WorkTrade;
        $workTrade->name ='W_Trade 7';
        $workTrade->save();

        $workTrade = new WorkTrade;
        $workTrade->name ='W_Trade 8';
        $workTrade->save();

        $workTrade = new WorkTrade;
        $workTrade->name ='W_Trade 9';
        $workTrade->save();

    }
}
