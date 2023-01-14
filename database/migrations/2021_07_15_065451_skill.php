<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Skill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('nama');

            $table->integer('tingkat')->nullable();

            $table->unsignedInteger('idKandidat')->nullable();

            $table->foreign('idKandidat', 'kandidat_id_fk_2021071501')->references('id')->on('kandidat')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }
}
