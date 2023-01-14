<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengalaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('nama_pengalaman');

            $table->string('posisi')->nullable();

            $table->string('tahun')->nullable();

            $table->unsignedInteger('idKandidat')->nullable();

            $table->foreign('idKandidat', 'kandidat_id_fk_20210715')->references('id')->on('kandidat')->onDelete('cascade')->onUpdate('cascade');
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
