<?php

namespace Database\Seeders;

use App\Models\Camp;
use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Camp::factory([
            'name' => "Xirusplai Banyoles",
            'start_date' => '2022-07-01',
            'end_date' => '2022-07-10',
            'places' => '30',
            'city_id' => City::where('name', 'Banyoles')->first()->id,
        ])->create();

        Camp::factory(10)->create();
    }
}
