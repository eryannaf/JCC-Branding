<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        User::create([
            'name' => $faker->fake()->name(),
            'email' => $faker->fake()->email(),
            'password' => bcrypt('password')
        ])->teacher()->create([
            'nama' => $faker->fake()->name(),
        ]);
    }
}
