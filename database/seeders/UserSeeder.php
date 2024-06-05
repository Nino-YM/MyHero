<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        $role = Role::firstOrCreate(['name' => 'user']);

        User::factory()->count(10)->create([
            'role_id' => $role->id
        ]);
    }
}
