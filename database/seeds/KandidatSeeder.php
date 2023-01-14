<?php

use App\Models\Kandidat;
use Illuminate\Database\Seeder;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kandidat = Kandidat::create([
            'nama'     => 'Rere Anggraini',
            'idSkill'  => '1',
            'domisili' => 'Yogyakarta',
            'biografi' => 'Hai nama saya Rere Anggraini, saya berasal dari Yogyakarta',
            'slug'     => 'Rere-Anggraini',
            'status'   => 'unhire',
            'idUser'   => '4',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Putra Arjuna',
            'idSkill'  => '2',
            'domisili' => 'Bandung',
            'biografi' => 'Hai nama saya Putra Arjuna, saya berasal dari Bandung',
            'slug'     => 'Putra-Arjuna',
            'status'   => 'unhire',
            'status'   => 'unhire',
            'idUser'   => '5',

        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Ervalina Arisanto',
            'idSkill'  => '3',
            'domisili' => 'Surabaya',
            'biografi' => 'Hai nama saya Ervalina Arisanto, saya berasal dari Surabaya',
            'slug'     => 'Ervalina-Arisanto',
            'status'   => 'unhire',
            'idUser'   => '6',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Rivan Sanjaya Arisanto',
            'idSkill'  => '4',
            'domisili' => 'Semarang',
            'biografi' => 'Hai nama saya Rivan Sanjaya Arisanto, saya berasal dari Semarang',
            'slug'     => 'Rivan-Sanjaya-Arisanto',
            'status'   => 'unhire',
            'idUser'   => '7',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Atmanda Putri',
            'idSkill'  => '4',
            'domisili' => 'Klaten',
            'biografi' => 'Hai nama saya Atmanda Putri, saya berasal dari KLaten',
            'slug'     => 'Atmanda-Putri',
            'status'   => 'unhire',
            'idUser'   => '8',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Rizaldi Azhar',
            'idSkill'  => '2',
            'domisili' => 'Surabaya',
            'biografi' => 'Hai nama saya Rizaldi Azhar, saya berasal dari Surabaya',
            'slug'     => 'Rizaldi-Azhar',
            'status'   => 'unhire',
            'idUser'   => '9',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Killa Anggraini',
            'idSkill'  => '2',
            'domisili' => 'Semarang',
            'biografi' => 'Hai nama saya Killa Anggraini, saya berasal dari Semarang',
            'slug'     => 'Killa-Anggraini',
            'status'   => 'unhire',
            'idUser'   => '10',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Nimas Ayu',
            'idSkill'  => '1',
            'domisili' => 'Yogyakarta',
            'biografi' => 'Hai nama saya Nimas Ayu, saya berasal dari Yogyakarta',
            'slug'     => 'Nimas-Ayu',
            'status'   => 'unhire',
            'idUser'   => '11',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Bagas Pradita',
            'idSkill'  => '3',
            'domisili' => 'Yogyakarta',
            'biografi' => 'Hai nama saya Bagas Pradita, saya berasal dari Yogyakarta',
            'slug'     => 'Bagas-Pradita',
            'status'   => 'unhire',
            'idUser'   => '12',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Unggul Putra',
            'idSkill'  => '3',
            'domisili' => 'Yogyakarta',
            'biografi' => 'Hai nama saya Unggul Putra, saya berasal dari Yogyakarta',
            'slug'     => 'Unggul-Putra',
            'status'   => 'unhire',
            'idUser'   => '13',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Valeno Aksara',
            'idSkill'  => '3',
            'domisili' => 'Surakarta',
            'biografi' => 'Hai nama saya Valeno Aksara, saya berasal dari Surakarta',
            'slug'     => 'Valeno-Aksara',
            'status'   => 'unhire',
            'idUser'   => '14',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Nila Cahyani',
            'idSkill'  => '4',
            'domisili' => 'Madiun',
            'biografi' => 'Hai nama saya Nila Cahyani, saya berasal dari Madiun',
            'slug'     => 'Nila-Cahyani',
            'status'   => 'unhire',
            'idUser'   => '15',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Aditya Laksana',
            'idSkill'  => '5',
            'domisili' => 'Surakarta',
            'biografi' => 'Hai nama saya Aditya Laksana, saya berasal dari Surakarta',
            'slug'     => 'Aditya-Laksana',
            'status'   => 'unhire',
            'idUser'   => '16',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Rinjani Sekar',
            'idSkill'  => '1',
            'domisili' => 'Malang',
            'biografi' => 'Hai nama saya Rinjani Sekar, saya berasal dari Malang',
            'slug'     => 'Rinjani-Sekar',
            'status'   => 'unhire',
            'idUser'   => '17',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Yoga Ardyansyah',
            'idSkill'  => '5',
            'domisili' => 'Malang',
            'biografi' => 'Hai nama saya Yoga Ardyansyah, saya berasal dari Malang',
            'slug'     => 'Yoga-Ardyansyah',
            'status'   => 'unhire',
            'idUser'   => '18',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Aldiva Putri',
            'idSkill'  => '3',
            'domisili' => 'Yogyakarta',
            'biografi' => 'Hai nama saya Aldiva Putri, saya berasal dari Yogyakarta',
            'slug'     => 'Aldiva-Putri',
            'status'   => 'unhire',
            'idUser'   => '19',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'     => 'Yusuf Eka',
            'idSkill'  => '5',
            'domisili' => 'Purworejo',
            'biografi' => 'Hai nama saya Yusuf Eka, saya berasal dari Purworejo',
            'slug'     => 'Yusuf-Eka',
            'status'   => 'unhire',
            'idUser'   => '20',
        ]);
        $kandidat->save();
    }
}
