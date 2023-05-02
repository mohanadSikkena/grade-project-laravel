<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Machine;
use Carbon\Carbon;


class MachineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $machine = new Machine ;
        $machine->name ='machine 1';
        $machine->description ='description 1';
        $machine->location_id ='1';
        $machine->machine_model ='machine_model 1';
        $machine->manfacturer ='manfacturer 1';
        $machine->user_id ='1';
        $machine->department_id ='1';
        $machine->category_id ='1';
        $machine->contractor ='contractor 1';
        $machine->serial_number ='11111111111111';
        $machine->supplier ='supplier 1';
        $machine->criticality_id ='1';
        $machine->notes_to_technection ='notes_to_technection 1';
        $machine->contract_expiry_date = Carbon::parse('2030-01-01');
        $machine->machine_code_id ='1';
        $machine->requirements ='requirements 1';
        $machine->save();

        $machine = new Machine ;
        $machine->name ='machine 2';
        $machine->description ='description 2';
        $machine->location_id ='2';
        $machine->machine_model ='machine_model 2';
        $machine->manfacturer ='manfacturer 2';
        $machine->user_id ='2';
        $machine->department_id ='2';
        $machine->category_id ='2';
        $machine->contractor ='contractor 2';
        $machine->serial_number ='2222222222222';
        $machine->supplier ='supplier 2';
        $machine->criticality_id ='2';
        $machine->notes_to_technection ='notes_to_technection 2';
        $machine->contract_expiry_date = Carbon::parse('2030-01-01');
        $machine->machine_code_id ='2';
        $machine->requirements ='requirements 2';
        $machine->save();

        $machine = new Machine ;
        $machine->name ='machine 3';
        $machine->description ='description 3';
        $machine->location_id ='3';
        $machine->machine_model ='machine_model 3';
        $machine->manfacturer ='manfacturer 3';
        $machine->user_id ='3';
        $machine->department_id ='3';
        $machine->category_id ='3';
        $machine->contractor ='contractor 3';
        $machine->serial_number ='33333333333333';
        $machine->supplier ='supplier 3';
        $machine->criticality_id ='3';
        $machine->notes_to_technection ='notes_to_technection 3';
        $machine->contract_expiry_date = Carbon::parse('2030-01-01');
        $machine->machine_code_id ='3';
        $machine->requirements ='requirements 3';
        $machine->save();

        $machine = new Machine ;
        $machine->name ='machine 4';
        $machine->description ='description 4';
        $machine->location_id ='4';
        $machine->machine_model ='machine_model 4';
        $machine->manfacturer ='manfacturer 4';
        $machine->user_id ='4';
        $machine->department_id ='4';
        $machine->category_id ='4';
        $machine->contractor ='contractor 4';
        $machine->serial_number ='44444444444444';
        $machine->supplier ='supplier 4';
        $machine->criticality_id ='4';
        $machine->notes_to_technection ='notes_to_technection 4';
        $machine->contract_expiry_date = Carbon::parse('2030-01-01');
        $machine->machine_code_id ='4';
        $machine->requirements ='requirements 4';
        $machine->save();

        $machine = new Machine ;
        $machine->name ='machine 5';
        $machine->description ='description 5';
        $machine->location_id ='5';
        $machine->machine_model ='machine_model 5';
        $machine->manfacturer ='manfacturer 5';
        $machine->user_id ='5';
        $machine->department_id ='5';
        $machine->category_id ='5';
        $machine->contractor ='contractor 5';
        $machine->serial_number ='55555555555555';
        $machine->supplier ='supplier 5';
        $machine->criticality_id ='5';
        $machine->notes_to_technection ='notes_to_technection 5';
        $machine->contract_expiry_date = Carbon::parse('2030-01-01');
        $machine->machine_code_id ='5';
        $machine->requirements ='requirements 5';
        $machine->save();

        $machine = new Machine ;
        $machine->name ='machine 6';
        $machine->description ='description 6';
        $machine->location_id ='6';
        $machine->machine_model ='machine_model 6';
        $machine->manfacturer ='manfacturer 6';
        $machine->user_id ='6';
        $machine->department_id ='6';
        $machine->category_id ='6';
        $machine->contractor ='contractor 6';
        $machine->serial_number ='6666666666666';
        $machine->supplier ='supplier 6';
        $machine->criticality_id ='6';
        $machine->notes_to_technection ='notes_to_technection 6';
        $machine->contract_expiry_date = Carbon::parse('2030-01-01');
        $machine->machine_code_id ='6';
        $machine->requirements ='requirements 6';
        $machine->save();

        $machine = new Machine ;
        $machine->name ='machine 7';
        $machine->description ='description 7';
        $machine->location_id ='7';
        $machine->machine_model ='machine_model 7';
        $machine->manfacturer ='manfacturer 7';
        $machine->user_id ='7';
        $machine->department_id ='7';
        $machine->category_id ='7';
        $machine->contractor ='contractor 7';
        $machine->serial_number ='7777777777777';
        $machine->supplier ='supplier 7';
        $machine->criticality_id ='7';
        $machine->notes_to_technection ='notes_to_technection 7';
        $machine->contract_expiry_date = Carbon::parse('2030-01-01');
        $machine->machine_code_id ='7';
        $machine->requirements ='requirements 7';
        $machine->save();

        $machine = new Machine ;
        $machine->name ='machine 8';
        $machine->description ='description 8';
        $machine->location_id ='8';
        $machine->machine_model ='machine_model 8';
        $machine->manfacturer ='manfacturer 8';
        $machine->user_id ='8';
        $machine->department_id ='8';
        $machine->category_id ='8';
        $machine->contractor ='contractor 8';
        $machine->serial_number ='8888888888888';
        $machine->supplier ='supplier 8';
        $machine->criticality_id ='8';
        $machine->notes_to_technection ='notes_to_technection 8';
        $machine->contract_expiry_date = Carbon::parse('2030-01-01');
        $machine->machine_code_id ='8';
        $machine->requirements ='requirements 8';
        $machine->save();

        $machine = new Machine ;
        $machine->name ='machine 9';
        $machine->description ='description 9';
        $machine->location_id ='9';
        $machine->machine_model ='machine_model 9';
        $machine->manfacturer ='manfacturer 9';
        $machine->user_id ='9';
        $machine->department_id ='9';
        $machine->category_id ='9';
        $machine->contractor ='contractor 9';
        $machine->serial_number ='999999999999';
        $machine->supplier ='supplier 9';
        $machine->criticality_id ='9';
        $machine->notes_to_technection ='notes_to_technection 9';
        $machine->contract_expiry_date = Carbon::parse('2030-01-01');
        $machine->machine_code_id ='9';
        $machine->requirements ='requirements 9';
        $machine->save();

    }
}
