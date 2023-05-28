<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Hijaz Abdullah',
            'username' => 'jaz.1453',
            'email' => 'jaz@gmail.com',
            'password' => Hash::make('123'),
            'picture' => 'profile/VWvRg5wW8tASLXWPD0RlcdV6av9QnK5FIft3p3v9.jpg',
            'is_admin' => true,
            'is_approved' => true
        ]);

        \App\Models\User::factory(5)->create();
    }
}
