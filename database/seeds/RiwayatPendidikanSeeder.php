<?php

namespace Database\Seeders;

use App\Models\RiwayatPendidikan;
use Illuminate\Database\Seeder;

class RiwayatPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'Diponegoro University',
            'gelar'         => 'Bachelor s Degree, Information Technology',
            'tahun'         => '2015-2017',
            'idKandidat'    => '1',
        ]);
        $riwayatpendidikan->save();

        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'SMA Negeri 2 Madiun',
            'gelar'         => '',
            'tahun'         => '2016-2020',
            'idKandidat'    => '1',
        ]);
        $riwayatpendidikan->save();

        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'SMP Negeri 4 Madiun',
            'gelar'         => '',
            'tahun'         => '2013-2016',
            'idKandidat'    => '1',
        ]);
        $riwayatpendidikan->save();

        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'Gajah Mada University',
            'gelar'         => 'Bachelor s Degree, Information Technology',
            'tahun'         => '2015-2017',
            'idKandidat'    => '2',
        ]);
        $riwayatpendidikan->save();

        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'SMA Negeri 2 Ponorogo',
            'gelar'         => '',
            'tahun'         => '2016-2020',
            'idKandidat'    => '2',
        ]);
        $riwayatpendidikan->save();

        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'SMP Negeri 4 Ponorogo',
            'gelar'         => '',
            'tahun'         => '2013-2016',
            'idKandidat'    => '2',
        ]);
        $riwayatpendidikan->save();

        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'Brawijaya University',
            'gelar'         => 'Bachelor s Degree, Information Technology',
            'tahun'         => '2015-2017',
            'idKandidat'    => '3',
        ]);
        $riwayatpendidikan->save();

        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'SMA Negeri 2 Malang',
            'gelar'         => '',
            'tahun'         => '2016-2020',
            'idKandidat'    => '3',
        ]);
        $riwayatpendidikan->save();

        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'SMP Negeri 4 Malang',
            'gelar'         => '',
            'tahun'         => '2013-2016',
            'idKandidat'    => '3',
        ]);
        $riwayatpendidikan->save();

        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'Indonesia University',
            'gelar'         => 'Bachelor s Degree, Information Technology',
            'tahun'         => '2015-2017',
            'idKandidat'    => '4',
        ]);
        $riwayatpendidikan->save();

        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'SMA Negeri 2 Ponorogo',
            'gelar'         => '',
            'tahun'         => '2016-2020',
            'idKandidat'    => '4',
        ]);
        $riwayatpendidikan->save();

        $riwayatpendidikan = RiwayatPendidikan::create([
            'nama_instansi' => 'SMP Negeri 4 Ponorogo',
            'gelar'         => '',
            'tahun'         => '2013-2016',
            'idKandidat'    => '4',
        ]);
        $riwayatpendidikan->save();
    }
}
