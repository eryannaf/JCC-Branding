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
            'name' => $faker->name(),
            'email' => 'admin@mail.com',
            'password' => bcrypt('password')
        ])->assignRole('admin');
        
        User::create([
            'name' => $faker->name(),
            'email' => 'guru@mail.com',
            'password' => bcrypt('password')
        ])->assignRole('pengajar')->teacher()->create([
            'nip' => $faker->lexify(),
            'keahlian' => $faker->word(),
            'alamat' => $faker->address(),
            'no_telp' => $faker->phoneNumber(),
        ]);
    }
}
