<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name'=>'ROOT'],
            ['name'=>'ADMIN'],
            ['name'=>'USER'],
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
