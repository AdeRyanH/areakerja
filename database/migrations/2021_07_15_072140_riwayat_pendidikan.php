<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RiwayatPendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pendidikan', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('nama_instansi');

            $table->string('gelar')->nullable();

            $table->string('tahun')->nullable();

            $table->unsignedInteger('idKandidat')->nullable();

            $table->foreign('idKandidat', 'kandidat_id_fk_20210716')->references('id')->on('kandidat')->onDelete('cascade')->onUpdate('cascade');
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
