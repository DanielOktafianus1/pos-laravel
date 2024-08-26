<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // opsi 1
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),

        ]);

        // opsi2
        // $user = new User();
        // $user->name = 'Admin';
        // $user->email = 'admin@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();
    }
}
