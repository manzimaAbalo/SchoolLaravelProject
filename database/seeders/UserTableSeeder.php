<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'=>"SUPEROOT",
                'email'=>"root@schoolrate",
                'phone'=>"92001020",
                'role_id'=>"1",
                'password'=>Hash::make('root')
            ],
            [
                'name'=>"ADMIN",
                'email'=>"admin@schoolrate",
                'phone'=>"92001030",
                'role_id'=>"2",
                'password'=>Hash::make('admin')
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
