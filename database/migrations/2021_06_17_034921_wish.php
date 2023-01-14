<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Wish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wish', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('ip');

            $table->unsignedInteger('idJob');

            $table->foreign('idJob', 'job_id_fk_476517')->references('id')->on('jobs')->onDelete('cascade');
        });
    }
}
