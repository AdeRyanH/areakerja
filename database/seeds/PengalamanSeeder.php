<?php

namespace Database\Seeders;

use App\Models\Pengalaman;
use Illuminate\Database\Seeder;

class PengalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengalaman = Pengalaman::create([
            'nama_pengalaman' => 'Seven Inc',
            'posisi'          => 'Programmer',
            'tahun'           => '2015-2017',
            'idKandidat'      => '1',
        ]);
        $pengalaman->save();

        $pengalaman = Pengalaman::create([
            'nama_pengalaman' => 'Seven Inc',
            'posisi'          => 'Mentor',
            'tahun'           => '2015-2017',
            'idKandidat'      => '1',
        ]);
        $pengalaman->save();

        $pengalaman = Pengalaman::create([
            'nama_pengalaman' => 'CV InfoJaya',
            'posisi'          => 'Hacker',
            'tahun'           => '2015-2016',
            'idKandidat'      => '2',
        ]);
        $pengalaman->save();

        $pengalaman = Pengalaman::create([
            'nama_pengalaman' => 'Politeknik Negeri Madiun',
            'posisi'          => 'Admin Jurusan Teknik',
            'tahun'           => '2016-2020',
            'idKandidat'      => '2',
        ]);
        $pengalaman->save();

        $pengalaman = Pengalaman::create([
            'nama_pengalaman' => 'AreaKerja',
            'posisi'          => 'HRD',
            'tahun'           => '2018-2020',
            'idKandidat'      => '3',
        ]);
        $pengalaman->save();

        $pengalaman = Pengalaman::create([
            'nama_pengalaman' => 'Seven Inc',
            'posisi'          => 'HRD',
            'tahun'           => '2015-2017',
            'idKandidat'      => '3',
        ]);
        $pengalaman->save();

        $pengalaman = Pengalaman::create([
            'nama_pengalaman' => 'Astra Indonesia',
            'posisi'          => 'Front-End Developer',
            'tahun'           => '2017-2019',
            'idKandidat'      => '4',
        ]);
        $pengalaman->save();

        $pengalaman = Pengalaman::create([
            'nama_pengalaman' => 'Shopee',
            'posisi'          => 'Front-End Developer',
            'tahun'           => '2019-2020',
            'idKandidat'      => '4',
        ]);
        $pengalaman->save();
    }
}
