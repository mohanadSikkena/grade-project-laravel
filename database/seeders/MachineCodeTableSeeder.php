<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MachineCode;

class MachineCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $machineCode = new MachineCode;
        $machineCode->code = '5463121';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '6541331';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '6456465';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '5643213';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '4232112';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '6534233';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '6432132';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '6451322';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '9432416';
        $machineCode->save();

    }
}
