<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkOrder>
 */
class WorkOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'problem_description'=>Str::random(40) ,
            'work_status_id'=>random_int(1,10) ,
            'work_type_id'=>random_int(1,10) ,
            'work_trade_id'=>random_int(1,10) ,
            'machine_id'=>random_int(1,10) ,
            'requster_id'=>random_int(1,10),
            'work_priority_id'=>random_int(1,10),
            'assign_to'=>random_int(1,10) ,
            'failure_cause'=>Str::random(10) ,
            'received_date'=>fake()->date(),
            'requirements'=>Str::random(40) ,

        ];
    }
}
