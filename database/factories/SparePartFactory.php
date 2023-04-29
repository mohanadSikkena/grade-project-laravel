<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SparePart>
 */
class SparePartFactory extends Factory
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
            'location_id'=>random_int(1,10) ,
            'priority_id'=>random_int(1,10) ,
            'quantity'=>random_int(1,9999) ,

        ];
    }
}
