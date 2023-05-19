<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('test-admin'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Mitra',
                'email'          => 'mitra@mitra.com',
                'password'       => Hash::make('test-mitra'),
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Mitra',
                'email'          => 'fadelirsyad04@gmail.com',
                'password'       => Hash::make('test-mitra'),
                'remember_token' => null,
            ],

            [
                'id'             => 4,
                'name'           => 'Rere Anggraini',
                'email'          => 'rere@rere.com',
                'password'       => Hash::make('test-rere'),
                'remember_token' => null,
            ],

            [
                'id'             => 5,
                'name'           => 'Putra Arjuna',
                'email'          => 'putra@putra.com',
                'password'       => Hash::make('test-putra'),
                'remember_token' => null,
            ],

            [
                'id'             => 6,
                'name'           => 'Ervalina Arisanto',
                'email'          => 'ervalina@ervalina.com',
                'password'       => Hash::make('test-erva'),
                'remember_token' => null,
            ],

            [
                'id'             => 7,
                'name'           => 'Rivan Sanjaya Arisanto',
                'email'          => 'rivan@rivan.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 8,
                'name'           => 'Atmanda Putri',
                'email'          => 'atmanda@atmanda.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 9,
                'name'           => 'Rizaldi Azhar',
                'email'          => 'rizaldi@rizaldi.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 10,
                'name'           => 'Killa Anggraini',
                'email'          => 'killa@killa.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 11,
                'name'           => 'Nimas Ayu',
                'email'          => 'nimas@nimas.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 12,
                'name'           => 'Bagas Pradita',
                'email'          => 'bagas@bagas.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 13,
                'name'           => 'Unggul Putra',
                'email'          => 'unggul@unggul.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 14,
                'name'           => 'Valeno Aksara',
                'email'          => 'valeno@valeno.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 15,
                'name'           => 'Nila Cahyani',
                'email'          => 'nila@nila.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 16,
                'name'           => 'Aditya Laksana',
                'email'          => 'aditya@aditya.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 17,
                'name'           => 'Rinjani Sekar',
                'email'          => 'rinjani@rinjani.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 18,
                'name'           => 'Yoga Ardyansyah',
                'email'          => 'yoga@yoga.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 19,
                'name'           => 'Aldiva Putri',
                'email'          => 'aldiva@aldiva.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 20,
                'name'           => 'Yusuf Eka',
                'email'          => 'yusuf@yusuf.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],
            [
                'id'             => 21,
                'name'           => 'SuperAdmin',
                'email'          => 'superadmin@superadmin.com',
                'password'       => Hash::make('test-superadmin'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}