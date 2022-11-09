<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
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
            'name' => $faker->name(),
            'email' => 'siswa@mail.com',
            'password' => bcrypt('password')
        ])->assignRole('siswa')->student()->create([
            'tgl_lahir' => $faker->dateTime(),
            'jenis_kelamin' => $faker->boolean(1)
        ]);
    }
}
