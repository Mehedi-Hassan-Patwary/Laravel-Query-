<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            ['city_name' => 'Dhaka'],
            ['city_name' => 'Chittagong'],
            ['city_name' => 'Khulna'],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
