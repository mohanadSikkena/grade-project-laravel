<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matrial>
 */
class MatrialFactory extends Factory
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
            'spare_part_id'=>random_int(1,10) ,
            'location_id'=>random_int(1,10) ,
            'criticality_id'=>random_int(1,10) ,
            'category_id'=>random_int(1,10) ,
            'quantity'=>random_int(1,9999) ,
        ];
    }
}
