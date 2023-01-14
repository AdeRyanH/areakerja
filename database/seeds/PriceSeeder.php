<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run()
    {
        $price = Price::create([
            'nama'              => 'Gabung Mitra',
            'deskripsi_singkat' => 'Dapatkan Lebih banyak benefit',
            'deskripsi_full'    => '<p><strong>5 Kali Publikasi </strong>di semua jaringan AreaKerja.com</p>',
            'list'              => [
                '<img alt="" src="img/img-01.png" style="height:10%; width:10%;margin-right: 10px;" /> Website & Aplikasi',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%; margin-right: 10px;" />  Instagram Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%;margin-right: 10px;" />  Highlight Story Favorit',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/google.png" style="height:10%; width:10%;margin-right: 10px;" />  Google Jobs & Bisnis',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/facebook.png" style="height:10%; width:10%;margin-right: 10px;" />  Facebook Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/twitter.png" style="height:10%; width:10%;margin-right: 10px;" />  Twitter',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/linkedin.png" style="height:10%; width:10%;margin-right: 10px;" />  Linkedin',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/telegram.png" style="height:10%; width:10%;margin-right: 10px;" />  Telegram',
            ],
            'harga'      => '10000000',
            'warna'      => '#ffa70e',
            'keterangan' => 'mitra',
        ]);
        $price->save();

        $price = Price::create([
            'nama'              => 'Silver',
            'deskripsi_singkat' => 'Jangkauan Cukup Luas',
            'deskripsi_full'    => '<p><strong>3 Kali Publikasi </strong> di semua jaringan AreaKerja.com</p>',
            'list'              => [
                '<img alt="" src="img/img-01.png" style="height:10%; width:10%;margin-right: 10px;" /> Website & Aplikasi',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%;margin-right: 10px;" />   Instagram Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%;margin-right: 10px;" />  Highlight Story Favorit',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/google.png" style="height:10%; width:10%;margin-right: 10px;" />  Google Jobs & Bisnis',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/facebook.png" style="height:10%; width:10%;margin-right: 10px;" />  Facebook Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/twitter.png" style="height:10%; width:10%;margin-right: 10px;" />  Twitter',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/linkedin.png" style="height:10%; width:10%;margin-right: 10px;" />  Linkedin',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/telegram.png" style="height:10%; width:10%;margin-right: 10px;" />  Telegram',
            ],
            'harga'      => '5000000',
            'warna'      => '#858990',
            'keterangan' => 'biasa',
        ]);
        $price->save();

        $price = Price::create([
            'nama'              => 'Bronze',
            'deskripsi_singkat' => 'Rekrut dengan Hemat',
            'deskripsi_full'    => '<p><strong>1 Kali Publikasi </strong> di semua jaringan AreaKerja.com</p>',
            'list'              => [
                '<img alt="" src="img/img-01.png" style="height:10%; width:10%;margin-right: 10px;" /> Website & Aplikasi',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%;margin-right: 10px;" />   Instagram Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%;margin-right: 10px;" />  Highlight Story Favorit',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/google.png" style="height:10%; width:10%;margin-right: 10px;" />  Google Jobs & Bisnis',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/facebook.png" style="height:10%; width:10%;margin-right: 10px;" />  Facebook Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/twitter.png" style="height:10%; width:10%;margin-right: 10px;" />  Twitter',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/linkedin.png" style="height:10%; width:10%;margin-right: 10px;" />  Linkedin',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/telegram.png" style="height:10%; width:10%;margin-right: 10px;" />  Telegram',
            ],
            'harga'      => '2500000',
            'warna'      => '#605349',
            'keterangan' => 'biasa',
        ]);
        $price->save();
    }
}
