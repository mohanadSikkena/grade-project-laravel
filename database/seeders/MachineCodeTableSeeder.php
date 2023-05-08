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
        $machineCode->code = '(01) 01-01-02-03-01';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-02';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-01';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-02';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-03';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-04';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-05';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-06';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-07';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-08';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-09';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-10';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-11';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-12';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-13';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-14';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-15';
        $machineCode->save();

        $machineCode = new MachineCode;
        $machineCode->code = '(01) 01-01-02-03-16';
        $machineCode->save();


    }
}
