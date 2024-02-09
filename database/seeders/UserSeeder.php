<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(9)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin Sabri',
            'email' => 'chairulsabri734@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '0819202920',
            'roles' => 'ADMIN',
        ]);
    }
}
