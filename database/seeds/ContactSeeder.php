<?php

namespace Database\Seeders;

use App\Models\contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        contact::create([
            'name' => 'admin',
            'contact' => '081234567890'
        ]);
    }
}