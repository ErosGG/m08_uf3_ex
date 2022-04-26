<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::factory([
            'name' => 'Banyoles',
            'population' => '20000',
        ])->create();

        City::factory([
            'name' => 'Deltebre',
            'population' => '15000',
        ])->create();

        City::factory(10)->create();
    }
}
