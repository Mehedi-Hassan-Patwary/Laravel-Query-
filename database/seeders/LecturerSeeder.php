<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Lecturer;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // JSON file theke data read koro
        $json = File::get(database_path('data/lecturer.json')); // file name check koro

        // Decode koro object hisabe
        $lecturers = collect(json_decode($json));

        // Each lecturer insert koro
        $lecturers->each(function ($lecturer) {
            Lecturer::create([
                'name'    => $lecturer->name,
                'email'   => $lecturer->email,
                'age'     => $lecturer->age,
                'city_id' => $lecturer->city,
            ]);
        });
    }
}
