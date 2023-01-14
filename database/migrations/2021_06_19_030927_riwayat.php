<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Riwayat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('ip');

            $table->unsignedInteger('idJob');

            $table->foreign('idJob', 'job_id_fk_476515')->references('id')->on('jobs')->onDelete('cascade');
            $table->timestamps();
        });
    }
}
