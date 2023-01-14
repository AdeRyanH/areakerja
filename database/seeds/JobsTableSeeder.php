<?php

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job = Job::create([
            'title'            => 'Kameramen',
            'full_description' => ['Menjadi kameramen saat produksi', 'Menjadi kameramen saat produksi', 'Mengedit foto hasil produksi untuk bahan konten'],
            'requirements'     => ['Berpengalaman di bidangnya minimal 1 tahun', 'Adaptif dengan semua jenis kamera', 'Memahami Adobe Premiere (menguasai After Effect menjadi poin plus)'],
            'job_nature'       => 'Full-time',
            'address'          => 'Banguntapan',
            'top_rated'        => '1',
            'salary'           => '10k - 20k',
            'location_id'      => '3',
            'company_id'       => '2',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'pendidikan'       => 'SMA/S1/S2',
            'gender'           => 'Pria/Wanita',
            'bataslamaran'     => '20 Januari 2021',
            'umur'             => 'Maks 20 Tahun',
            'lokasikerja'      => 'Jalan Kanoman No. 20 Banguntapan, Yogyakarta',
            'slug'             => 'kameramen-di-seven-inc',
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title'            => 'Customer Service',
            'full_description' => ['Melayani customer dan mencari potensi closing bisa melalui telpon,chat wa atau dm', 'Melakukan follow up ke customer', 'Menjalin hubungan after sales dengan customer'],
            'requirements'     => ['Jujur, amanah, tanggung jawab, cekatan, Teliti dan sabar', 'Komunikatif & Mampu bekerja dalam team / individu', 'Dapat menggunakan komputer dan internet'],
            'job_nature'       => 'Full-time',
            'address'          => 'Banguntapan jogja',
            'top_rated'        => '1',
            'salary'           => '10jt - 20jt',
            'location_id'      => '3',
            'company_id'       => '6',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'pendidikan'       => 'SMA/S1/S2',
            'gender'           => 'Pria/Wanita',
            'bataslamaran'     => '20 Jani 2021',
            'umur'             => 'Maks 25 Tahun',
            'lokasikerja'      => 'Jalan Bimo No. 20 Sleman, Yogyakarta',
            'slug'             => 'customer-service-di-jw-media-production',
        ]);
        $job->save();
        $job->categories()->sync(4);

        $job = Job::create([
            'title'            => 'Pramusaji / Pelayan di Rumah Makan',
            'full_description' => ['Melayani pelanggan dengan ramah', 'Membantu chef di dapur', 'Membantu menyiapkan pesanan pelanggan'],
            'requirements'     => ['Jujur, amanah, tanggung jawab, cekatan, Teliti dan sabar', 'Mempunyai pengalaman di rumah makan minimal 1 tahun', 'Mengerti administrasi'],
            'job_nature'       => 'Full-time',
            'address'          => 'Banguntapan jogja',
            'top_rated'        => '0',
            'salary'           => '500k - 700k',
            'location_id'      => '3',
            'company_id'       => '1',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'pendidikan'       => 'SMA/SMK sederajat',
            'gender'           => 'Pria/Wanita',
            'bataslamaran'     => '28 Juni 2021',
            'umur'             => 'Maks 26 Tahun',
            'lokasikerja'      => 'Jalan Kawedanan No. 20 Kulon Progo, Yogyakarta',
            'slug'             => 'pramusaji-pelayan-di-rumah-makan-di-areakerja',
        ]);
        $job->save();
        $job->categories()->sync(5);

        $job = Job::create([
            'title'            => 'Admin',
            'full_description' => ['Melakukan data entry dan rekap', 'Melakukan tugas administrasi di bagian pendaftaran dan persyaratan', 'Melaksanakan kegiatan surat menyurat, dokumentasi, dan pengarsipan'],
            'requirements'     => ['Dapat menggunakan komputer dan internet', 'Cekatan dan teliti', 'Sabar dalam merespon chat konsumen'],
            'job_nature'       => 'Full-time',
            'address'          => 'DIY',
            'top_rated'        => '1',
            'salary'           => '800k - 1jt',
            'location_id'      => '1',
            'company_id'       => '6',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'pendidikan'       => 'SMA/S1/S2',
            'gender'           => 'Wanita',
            'bataslamaran'     => '1 Juli 2021',
            'umur'             => 'Maks 24 Tahun',
            'lokasikerja'      => 'Jalan Affandi No. 20 Depok, Sleman, Yogyakarta',
            'slug'             => 'admin-di-jw-media-production',
        ]);
        $job->save();
        $job->categories()->sync(4);

        $job = Job::create([
            'title'            => 'Content Creator',
            'full_description' => ['Melakukan editing foto maupun video menggunakan adobe premiere, photoshop', 'Membuat video mengenai isu/trend terbaru', 'Menoperasikan FB, IG, TikTok'],
            'requirements'     => ['Minimal 2 tahun pengalaman sebagai content creator, video editor, vidiografi', 'Mampu bekerja cepat dan di target', 'Pengatahuan mengenai FB, IG, TikTok dan YOutube'],
            'job_nature'       => 'Full-time',
            'address'          => 'Bantul',
            'top_rated'        => '0',
            'salary'           => '800k - 1jt',
            'location_id'      => '3',
            'company_id'       => '2',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'pendidikan'       => 'SMA/S1/S2',
            'gender'           => 'Pria/Wanita',
            'bataslamaran'     => '20 Juni 2021',
            'umur'             => 'Maks 20 Tahun',
            'lokasikerja'      => 'Jalan Kanoman No. 20 Banguntapan Yogyakarta',
            'slug'             => 'content-creator-di-seven-inc',
        ]);
        $job->save();
        $job->categories()->sync(1);

        $job = Job::create([
            'title'            => 'Designer Videographer',
            'full_description' => ['Membuat Konsep Video Iklan', 'Produksi Video Iklan', 'Mengedit video'],
            'requirements'     => ['Pria/wanita Single', 'Familiar dengan software video editing (adobe premiere / after effects dll), Corel, Photoshop.', 'Memiliki kemampuan pengambilan video dengan kamera (DSLR/Mirrorless)menjadi nilai tambah'],
            'job_nature'       => 'Full-time',
            'address'          => 'Sleman',
            'top_rated'        => '1',
            'salary'           => '1 jt - 1,2 jt',
            'location_id'      => '2',
            'company_id'       => '4',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'pendidikan'       => 'SMA/S1/S2',
            'gender'           => 'Pria/Wanita',
            'bataslamaran'     => '20 Juni 2021',
            'umur'             => 'Maks 24 Tahun',
            'lokasikerja'      => 'Jalan Kenari No. 29 Yogyakarta',
            'slug'             => 'designer-videographer-di-jogja-tailor',
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title'            => 'Barista - Waiters - Cashier',
            'full_description' => ['Memiliki basic knowledge tentang espresso dan manual brewing', 'Memberikan penjelasan tentang produk ke customer mengantar makanan / minuman', 'Menginput orderan'],
            'requirements'     => ['Berpenampilan menarik', 'Menguasai mesin kopi dan manual brewuntuk barista', 'Memiliki ketertarikan di dunia food & beverages'],
            'job_nature'       => 'Full-time',
            'address'          => 'Bantul',
            'top_rated'        => '0',
            'salary'           => '500k',
            'location_id'      => '3',
            'company_id'       => '3',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'pendidikan'       => 'SMA/S1/S2',
            'gender'           => 'Pria/Wanita',
            'bataslamaran'     => '20 Januari 2021',
            'umur'             => 'Maks 20 Tahun',
            'lokasikerja'      => 'Jalan Manunggal No. 20 Yogyakarta',
            'slug'             => 'barista-waiters-cashier-di-kopisoe',
        ]);
        $job->save();
        $job->categories()->sync(5);

        $job = Job::create([
            'title'            => 'Videographer',
            'full_description' => ['memvisualisasikan kebutuhan komunikasi perusahaan melalui bentuk video', 'Mempersiapkan peralatan pengambilan video dan live streaming', 'Melakukan proses editing video'],
            'requirements'     => ['Pria/wanita Single', 'Familiar dengan software video editing (adobe premiere / after effects dll), Corel, Photoshop.', 'Memiliki kemampuan pengambilan video dengan kamera (DSLR/Mirrorless)menjadi nilai tambaha'],
            'job_nature'       => 'Full-time',
            'address'          => 'Sleman',
            'top_rated'        => '0',
            'salary'           => '900k',
            'location_id'      => '2',
            'company_id'       => '2',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'pendidikan'       => 'SMA/S1/S2',
            'gender'           => 'Pria/Wanita',
            'bataslamaran'     => '2 Juli 2021',
            'umur'             => 'Maks 22 Tahun',
            'lokasikerja'      => 'Jalan Laksda. Adi Sucipto No. 89 Yogyakarta',
            'slug'             => 'videographer-di-seven-inc',
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title'            => 'Food and Beverage Manager',
            'full_description' => ['Membantu team untuk berproduksi sesuai system perusahaan', 'Memberikan pelatihan marketing'],
            'requirements'     => ['Selalu mempunyai ide untuk penjualan', 'Berpengalaman', 'Pria/wanita max 30th'],
            'job_nature'       => 'Full-time',
            'address'          => 'DIY',
            'top_rated'        => '0',
            'salary'           => '4 - 5 Juta',
            'location_id'      => '1',
            'company_id'       => '5',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'pendidikan'       => 'SMA/S1/S2',
            'gender'           => 'Pria/Wanita',
            'bataslamaran'     => '25 Juni 2021',
            'umur'             => 'Maks 25 Tahun',
            'lokasikerja'      => 'Jalan Kanoman No. 20 Banguntapan Yogyakarta',
            'slug'             => 'food-and-beverage-manager-di-the-oxalis-regency-hotel',
        ]);
        $job->save();
        $job->categories()->sync(4);

        $job = Job::create([
            'title'            => 'Editor Video',
            'full_description' => ['Membuat Konsep Video Iklan', 'Produksi Video Iklan', 'Mengedit video', 'Membuat design grafis untuk advertising'],
            'requirements'     => ['Pria/wanita Single', 'Familiar dengan software video editing (adobe premiere / after effects dll), Corel, Photoshop.', 'Memiliki kemampuan pengambilan video dengan kamera (DSLR/Mirrorless)menjadi nilai tambah'],
            'job_nature'       => 'Full-time',
            'address'          => 'Sleman',
            'top_rated'        => '0',
            'salary'           => '2,5 - 4,5 Juta',
            'location_id'      => '2',
            'company_id'       => '2',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'pendidikan'       => 'SMA/S1/S2',
            'gender'           => 'Pria/Wanita',
            'bataslamaran'     => '20 Juni 2021',
            'umur'             => 'Maks 20 Tahun',
            'lokasikerja'      => 'Jalan Kanoman No. 20 Banguntapan Yogyakarta',
            'slug'             => 'editor-video-di-seven-inc',

        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title'            => 'TikTok Creator',
            'full_description' => ['Membuat konten bermanfaat yang sedang menjadi trend', 'Membuat timeline pekerjaan terhadap tema harian maupun bulanan', 'Melakukan kegiatan suting dari hasil tema yang dibuat, serta dapat berkoordinasi dengan keseluruh team yang berkaitan.'],
            'requirements'     => ['Update tentang trend terkini', 'Kreatif dan memiliki banyak ide', 'Menguasai software software editing (Desain Grafis / Videografi)'],
            'job_nature'       => 'Full-time',
            'address'          => 'Sleman',
            'top_rated'        => '1',
            'salary'           => '2,5 - 4,5 Juta',
            'location_id'      => '4',
            'company_id'       => '7',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'pendidikan'       => 'SMA/S1/S2',
            'gender'           => 'Pria/Wanita',
            'bataslamaran'     => '18 Juni 2021',
            'umur'             => 'Maks 22 Tahun',
            'lokasikerja'      => 'Jalan  Mangkubumi No. 11 Yogyakarta',
            'slug'             => 'tiktok-creator-di-dynamic-space',
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title'            => 'Human Resource Development',
            'full_description' => ['Melakukan Manpower plan, pengawasan SDM, pengembangan kualitas & karir, serta mengurusi adminstrasi SDM.', 'Bertanggung jawab penuh atas rekrutmen mulai dari mencari pelamar sampai wawancara, dan juga pengambilan keputusannya.', 'Menindak dan memberikan peringatan kepada SDM yang melanggar peraturan atau tindakan tidak disiplin.'],
            'requirements'     => ['Pengalaman Kerja Minimal lth di Bidang HRD', 'Familiar Dengan Personnel Administration, Talent Development Program, Career Planing, Job Evaluation & Work Load Analysis', 'Berkepribadian Baik, Memiliki Skill Komunikasi, Pekerja Keras & Siap Bekerja di Bawah Tekanan'],
            'job_nature'       => 'Full-time',
            'address'          => 'Sleman',
            'top_rated'        => '0',
            'salary'           => '2,5 - 4,5 Juta',
            'location_id'      => '3',
            'email'            => 'fadelirsyad08@gmail.com',
            'notelp'           => '+62895329990656',
            'company_id'       => '1',
            'pendidikan'       => 'S1/S2',
            'gender'           => 'Pria/Wanita',
            'bataslamaran'     => '20 Juli 2021',
            'umur'             => 'Maks 26 Tahun',
            'lokasikerja'      => 'Jalan Melati Sorowajan No. 2 Yogyakarta',
            'slug'             => 'human-resource-development-di-areakerja',
        ]);
        $job->save();
        $job->categories()->sync(3);
    }
}
