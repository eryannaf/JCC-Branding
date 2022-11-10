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
        $faker = Factory::create('id_ID');

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
            'nip' => $faker->nik(),
            'keahlian' => $faker->randomElement((['Matematika', 'IPA', 'Bahasa Inggris', 'Bahasa Indonesia', 'PKN', 'PAI', 'IPS'])),
            'alamat' => $faker->rumah(),
            'no_telp' => $faker->phoneNumber(),
        ]);

        for ($i = 0; $i < 30; $i++) {
            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => bcrypt('password')
            ])->assignRole('pengajar')->teacher()->create([
                'nip' => $faker->nik(),
                'keahlian' => $faker->randomElement((['Matematika', 'IPA', 'Bahasa Inggris', 'Bahasa Indonesia', 'PKN', 'PAI', 'IPS'])),
                'alamat' => $faker->rumah(),
                'no_telp' => $faker->phoneNumber(),
            ]);
        }
    }
}
