<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rekomendasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekomendasi', static function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idMitra')->nullable();
            $table->foreign('idMitra', 'mitra_id_fk_202107261')->references('id')->on('mitra');
            $table->unsignedInteger('idKandidat')->nullable();
            $table->foreign('idKandidat', 'kandidat_id_fk_202107262')->references('id')->on('kandidat');
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
