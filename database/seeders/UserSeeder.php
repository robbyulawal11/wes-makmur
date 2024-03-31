<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123123'), // password
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);
        $admin->assignRole('admin');

        \App\Models\User::factory(100)->create()->each(function ($user) {
            $user->assignRole('editor');
        });
    }
}
