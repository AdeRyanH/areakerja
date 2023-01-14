<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sertifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikasi', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('nama_sertifikasi');

            $table->string('penyelenggara')->nullable();

            $table->string('tahun')->nullable();

            $table->unsignedInteger('idKandidat')->nullable();

            $table->foreign('idKandidat', 'kandidat_id_fk_20210717')->references('id')->on('kandidat')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
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
