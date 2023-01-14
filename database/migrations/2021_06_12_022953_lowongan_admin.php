<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LowonganAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', static function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('idPembayaran');

            $table->string('namaperusahaan');

            $table->string('deskripsiperusahaan');

            $table->string('alamatperusahaan');

            $table->string('gambar');

            $table->string('posisi');

            $table->string('deskripsi_pekerjaan')->nullable();

            $table->longText('syarat_pekerjaan')->nullable();

            $table->string('job_nature')->nullable();

            $table->string('alamat_kantor')->nullable();

            $table->string('min_pendidikan')->nullable();

            $table->string('gender')->nullable();

            $table->string('min_umur')->nullable();

            $table->string('bataslamaran')->nullable();

            $table->string('gaji');

            $table->string('email')->nullable();

            $table->string('notelp')->nullable();

            $table->string('web')->nullable();

            $table->timestamps();

            $table->softDeletes();
            $table->foreign('idPembayaran', 'pembayaran_id_fk_476540')->references('id')->on('pembayaran')->onDelete('cascade');
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
