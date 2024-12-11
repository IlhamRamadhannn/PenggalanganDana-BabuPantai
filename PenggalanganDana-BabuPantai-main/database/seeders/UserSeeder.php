<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        foreach (range(1, 10) as $index) { // Membuat 10 user dummy
            Users::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone_number' => $faker->phoneNumber,
                'password' => Hash::make('password'), // Password default
                'total_donation' => $faker->randomFloat(2, 100000, 1000000), // Donasi total acak antara 100rb - 1jt
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
