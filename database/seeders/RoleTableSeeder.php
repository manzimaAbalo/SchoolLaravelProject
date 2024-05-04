<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->truncate();
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
