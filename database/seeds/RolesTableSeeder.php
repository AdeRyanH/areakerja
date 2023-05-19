<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Admin',
            ],
            [
                'id'    => 2,
                'title' => 'User',
            ],
            [
                'id'    => 3,
                'title' => 'Mitra',
            ],
            [
                'id'    => 4,
                'title' => 'Kandidat',
            ],
            [
                'id'    => 5,
                'title' => 'SuperAdmin',
            ],
        ];

        Role::insert($roles);
    }
}