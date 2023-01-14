<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MainSkill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_skill', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('nama');

            $table->timestamps();
        });
    }
}
