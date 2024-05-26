<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "Muhamad Azmi Naziyulloh",
            "nis" => 12309770,
            "romble" => "PPLG X-4",
            "rayon" => "Cibedug 1",
            "password" => bcrypt('password')
        ]);

        User::create([
            "name" => "Nabylla Yospi",
            "nis" => 12309881,
            "romble" => "PPLG X-4",
            "rayon" => "Cibedug 4",
            "password" => bcrypt('password')
        ]);


        User::create([
            "name" => "Zakwan",
            "nis" => 12309811,
            "romble" => "PPLG X-4",
            "rayon" => "Sukasari 2",
            "password" => bcrypt('password')
        ]);




    }
}
