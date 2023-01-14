<?php

namespace Database\Seeders;

use App\Models\Mitra;
use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mitra = Mitra::create([
            'nama'      => 'Seven Inc',
            'email'     => 'fadelirsyad04@gmail.com',
            'deskripsi' => 'Perusahaan gg',
            'alamat'    => 'Banguntapan',
            'no'        => '0895329990656',
            'logo'      => 'seven.jpg',
            'koin'      => '100',
            'slug'      => 'seven-inc',
            'idUser'    => '3',
        ]);
        $mitra->save();

        $mitra = Mitra::create([
            'nama'      => 'ADAM JAYA',
            'email'     => 'mitra@mitra.com',
            'deskripsi' => 'PT. ADAM JAYA merupakan perusahaan IT yang berfokus pada pengembangan teknologi cloud solution, applikasi perusahaan, e-commerce serta startup digital.',
            'alamat'    => 'Jl. Pintu Selatan UPN No. 2A, Ngropoh, Condongcatur, Sleman, DIY - 55281',
            'no'        => '081234357779',
            'logo'      => 'logo.png',
            'koin'      => '100',
            'slug'      => 'adam-jaya',
            'idUser'    => '2',
        ]);
        $mitra->save();
    }
}
