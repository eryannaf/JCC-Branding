<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Classes;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($i = 1; $i <= count(Student::all()); $i++) {
            $user = Student::where('id', $i)->first();
            Classes::create([
                'kelas' => $faker->randomElement((['IPA 1', 'IPA 2', 'IPA 3', 'IPA 4'])),
                'user_id' => $user->user_id,
            ]);
        }
    }
}
