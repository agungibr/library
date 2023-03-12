<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Admin',
            'email'=>'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
         ]);
         User::create([
            'name'=> 'agung',
            'email'=>'agung@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'user',
         ]);
    }
}
