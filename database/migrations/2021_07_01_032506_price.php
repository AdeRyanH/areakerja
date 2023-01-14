<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Price extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('nama')->nullable();

            $table->string('deskripsi_singkat')->nullable();

            $table->string('deskripsi_full')->nullable();

            $table->json('list')->nullable();

            $table->integer('harga')->nullable();

            $table->string('warna')->nullable();

            $table->string('keterangan')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
