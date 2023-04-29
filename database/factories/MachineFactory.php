<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Machine>
 */
class MachineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>Str::random(10) ,
            'description'=>Str::random(40) ,
            'location_id'=>random_int(1,10) ,
            'machine_model'=>Str::random(20) ,
            'manfacturer'=>Str::random(10) ,
            'user_id'=>random_int(1,10),
            'department_id'=>random_int(1,10) ,
            'category_id'=>random_int(1,10) ,
            'contractor'=>Str::random(10) ,
            'serial_number'=>random_int(0000000001,9999999999) ,
            'supplier'=>Str::random(15) ,
            'criticality_id'=>random_int(1,10) ,
            'notes_to_technection'=>Str::random(40) ,
            'contract_expiry_date'=>fake()->date(),
            'machine_code_id'=>random_int(1,10) ,
            'requirements'=>Str::random(15) ,
        ];
    }
}
