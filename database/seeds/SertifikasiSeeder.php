<?php

namespace Database\Seeders;

use App\Models\Sertifikasi;
use Illuminate\Database\Seeder;

class SertifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sertifikasi = Sertifikasi::create([
            'nama_sertifikasi' => 'Bootcamp Python',
            'penyelenggara'    => 'Universitas Indonesia',
            'tahun'            => '2019',
            'idKandidat'       => '1',
        ]);
        $sertifikasi->save();

        $sertifikasi = Sertifikasi::create([
            'nama_sertifikasi' => 'Junior Web Developer',
            'penyelenggara'    => 'Pemerintah hehe',
            'tahun'            => '2020',
            'idKandidat'       => '2',
        ]);
        $sertifikasi->save();

        $sertifikasi = Sertifikasi::create([
            'nama_sertifikasi' => 'VSGA',
            'penyelenggara'    => 'Pemerintah hehe',
            'tahun'            => '2020',
            'idKandidat'       => '3',
        ]);
        $sertifikasi->save();

        $sertifikasi = Sertifikasi::create([
            'nama_sertifikasi' => 'Bootcamp Python',
            'penyelenggara'    => 'Pemerintah hehe',
            'tahun'            => '2020',
            'idKandidat'       => '4',
        ]);
        $sertifikasi->save();
    }
}
