<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Camp>
 */
class CampFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $julyStart = Carbon::createFromFormat('Y-m-d', '2022-07-01')->toDateString();
        $julyEnd = Carbon::createFromFormat('Y-m-d', '2022-07-31')->toDateString();
        $augustStart = Carbon::createFromFormat('Y-m-d', '2022-08-01')->toDateString();
        $augustEnd = Carbon::createFromFormat('Y-m-d', '2022-08-31')->toDateString();

        return [
            'name' => $this->faker->company(),
            'start_date' => $this->faker->dateTimeBetween($julyStart, $julyEnd),
            'end_date' => $this->faker->dateTimeBetween($augustStart, $augustEnd),
            'places' => $this->faker->numberBetween(10, 50),
            'city_id' => City::all()->random()->id,
        ];
    }
}
