<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = File::get(database_path('data/students.json'));


        $students = collect(json_decode($json));


        $students->each(function ($student) {
            Student::create([
                'name'    => $student->name,
                'email'   => $student->email,
                'age'     => $student->age,
                'city_id' => $student->city,
            ]);

        });
    }
}
