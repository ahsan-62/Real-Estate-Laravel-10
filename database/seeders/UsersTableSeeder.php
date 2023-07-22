<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([

            'name'=>'Admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('12345678'),
            'role'=>'admin',
            'status'=>'active',
            'remember_token' => Str::random(10),
        ]);
        User::updateOrCreate([

            'name'=>'Agent',
            'username'=>'agent',
            'email'=>'agent@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('12345678'),
            'role'=>'admin',
            'status'=>'active',
            'remember_token' => Str::random(10),
        ]);
        User::updateOrCreate([

            'name'=>'User',
            'username'=>'user',
            'email'=>'user@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('12345678'),
            'role'=>'admin',
            'status'=>'active',
            'remember_token' => Str::random(10),
        ]);
    }
}
