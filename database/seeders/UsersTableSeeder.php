<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'bio' => 'Ma bio',
            'is_active' => true,
            'password' => Hash::make('123456'),
            'avatar_url' => 'http://localhost:8000/avatars/u1.jpg'
        ]);
        User::factory(10)->create();
    }
}
