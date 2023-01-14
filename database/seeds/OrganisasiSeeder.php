<?php

namespace Database\Seeders;

use App\Models\Organisasi;
use Illuminate\Database\Seeder;

class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organisasi = Organisasi::create([
            'judul'      => 'FBI',
            'tahun'      => '2015-2018',
            'jabatan'    => 'Ketua Umum',
            'idKandidat' => '1',
        ]);
        $organisasi->save();

        $organisasi = Organisasi::create([
            'judul'      => 'PDI Perjuangan',
            'tahun'      => '2018-2020',
            'jabatan'    => 'Ketua Humas',
            'idKandidat' => '1',
        ]);
        $organisasi->save();

        $organisasi = Organisasi::create([
            'judul'      => 'Himpunan Mahasiswa Anti Korupsi',
            'tahun'      => '2015-2018',
            'jabatan'    => 'Ketua Umum',
            'idKandidat' => '2',
        ]);
        $organisasi->save();

        $organisasi = Organisasi::create([
            'judul'      => 'HMI',
            'tahun'      => '2017-2020',
            'jabatan'    => 'Ketua Divisi Humas',
            'idKandidat' => '2',
        ]);
        $organisasi->save();

        $organisasi = Organisasi::create([
            'judul'      => 'BEM Universitas Indonesia',
            'tahun'      => '2017-2020',
            'jabatan'    => 'Ketua Umum',
            'idKandidat' => '3',
        ]);
        $organisasi->save();

        $organisasi = Organisasi::create([
            'judul'      => 'Jurnalis Universitas Indonesia',
            'tahun'      => '2017-2018',
            'jabatan'    => 'Kordiv Pengakajian',
            'idKandidat' => '3',
        ]);
        $organisasi->save();

        $organisasi = Organisasi::create([
            'judul'      => 'BEM-KM PNM',
            'tahun'      => '2019-2020',
            'jabatan'    => 'Ketua Umum',
            'idKandidat' => '4',
        ]);
        $organisasi->save();

        $organisasi = Organisasi::create([
            'judul'      => 'Himpunan Mahasiswa Jabodetabek',
            'tahun'      => '2019-2021',
            'jabatan'    => 'Kordiv Humas',
            'idKandidat' => '4',
        ]);
        $organisasi->save();
    }
}
