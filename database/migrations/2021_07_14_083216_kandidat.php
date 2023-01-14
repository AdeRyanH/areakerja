<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kandidat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('nama');

            $table->unsignedInteger('idSkill')->nullable();
            $table->foreign('idSkill', 'skill_id_fk_202107271')->references('id')->on('main_skill');

            $table->string('domisili')->nullable();

            $table->string('biografi')->nullable();

            $table->string('slug')->nullable();

            $table->string('status')->nullable();

            $table->string('cv')->nullable();

            $table->string('image')->nullable();

            $table->unsignedInteger('idUser')->nullable();
            $table->foreign('idUser', 'user_id_fk_202107211')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }
}
