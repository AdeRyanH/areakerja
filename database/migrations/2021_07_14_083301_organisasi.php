<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Organisasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisasi', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('judul');

            $table->string('tahun')->nullable();

            $table->string('jabatan')->nullable();

            $table->unsignedInteger('idKandidat')->nullable();

            $table->foreign('idKandidat', 'kandidat_id_fk_20210714')->references('id')->on('kandidat')->onDelete('cascade')->onUpdate('cascade');
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
