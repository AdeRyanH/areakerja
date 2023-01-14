<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lownganmitra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan_mitra', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('posisi');

            $table->string('deskripsi_pekerjaan')->nullable();

            $table->longText('syarat_pekerjaan')->nullable();

            $table->string('status_pekerjaan')->nullable();

            $table->string('alamat_kantor')->nullable();

            $table->string('min_pendidikan')->nullable();

            $table->string('gender')->nullable();

            $table->string('min_umur')->nullable();

            $table->string('bataslamaran')->nullable();

            $table->string('gaji')->nullable();

            $table->string('status_pemasangan')->default('Belum Terpasang');

            $table->string('email')->nullable();

            $table->string('notelp')->nullable();

            $table->string('web')->nullable();

            $table->timestamps();

            $table->unsignedInteger('idUser')->nullable();

            $table->foreign('idUser', 'user_id')->references('id')->on('users')->onDelete('cascade');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
