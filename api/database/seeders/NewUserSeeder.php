<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\UserRole;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $newUser = User::factory()->create([
            'name' => 'Usuario prueba',
            'email' => 'matiaaasalejandro@gmail.com',
        ]);

        $role = Role::find(1);

        if ($role) {
            UserRole::create([
                'role_id' => $role->id,
                'user_id' => $newUser->id
            ]);
        }
    }
}
