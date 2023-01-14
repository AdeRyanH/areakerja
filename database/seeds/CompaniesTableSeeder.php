<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = Company::create([
            'name'      => 'Areakerja',
            'deskripsi' => 'Areakerja merupakan perusahaan untuk mencari kerja',
            'alamat'    => 'Jl. Kanoman 23 Tegal Pasar ',
            'gambar'    => 'Areakerja.jpeg',
            'slug'      => 'areakerja',
        ]);
        $company->save();

        $company = Company::create([
            'name'      => 'Seven Inc',
            'deskripsi' => 'Seven Inc merupakan perusahaan yang berfokus pada industri clothing/apparel pria',
            'alamat'    => 'Jl. Janti gang Arjuna Banguntapan Bantul Yogyakarta',
            'gambar'    => 'Seven Inc.png',
            'slug'      => 'seven-inc',
        ]);
        $company->save();

        $company = Company::create([
            'name'      => 'KopiSoe',
            'deskripsi' => 'Kopi Soe merupakan Coffee Shop yang mengandalkan mengandalkan ciri khas jadul agar mendapat kesan Indonesia banget untuk penikmatnya',
            'alamat'    => 'Jl. Colombo Yogyakarta',
            'gambar'    => 'kopisoe.png',
            'slug'      => 'kopisoe',
        ]);
        $company->save();

        $company = Company::create([
            'name'      => 'Jogja Tailor',
            'deskripsi' => 'Jogja Tailor melayani jasa jahitan yang eksklusif',
            'alamat'    => 'Jl. Janti gang Arjuna Baguntapan',
            'gambar'    => 'Jogja Tailor.png',
            'slug'      => 'jogja-tailor',
        ]);
        $company->save();

        $company = Company::create([
            'name'      => 'The Oxalis Regency Hotel',
            'deskripsi' => 'The Oxalis Regency Hotel adalah tempat menginap ideal bagi para wisatawan yang mencari pesona dan kenyamanan dari kota Magelang',
            'alamat'    => 'Jl. Cemp. No.17, Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122',
            'gambar'    => 'The Oxalis Regency Hotel.png',
            'slug'      => 'the-oxalis-regency-hotel',
        ]);
        $company->save();

        $company = Company::create([
            'name'      => 'JW Media Production',
            'deskripsi' => 'JW Creative Production Adalah Pengelola Website dan Youtube',
            'alamat'    => 'l. Cebongan No.310, Dukuh, Sidomoyo, Kec. Godean, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55264',
            'gambar'    => 'JW Media Production.jpg',
            'slug'      => 'jw-media-production',
        ]);
        $company->save();

        $company = Company::create([
            'name'      => 'Dynamic Space',
            'deskripsi' => 'Dynamic Space adalah perusahaan digutal marketing',
            'alamat'    => 'Jl. Janti gang Bimo Baguntapan',
            'gambar'    => 'Dynamic Space.png',
            'slug'      => 'dynamic-space',
        ]);
        $company->save();
    }
}
