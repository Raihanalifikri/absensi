<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Fungsi nya membuat user random
        User::factory(20)->create();

        User::factory()->create([
            'name' => 'Hurairah',
            'email' => 'raihan@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
