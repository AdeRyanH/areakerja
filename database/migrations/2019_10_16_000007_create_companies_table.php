<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('deskripsi')->nullable();

            $table->string('alamat')->nullable();

            $table->string('gambar');

            $table->timestamps();

            $table->string('slug');

            $table->softDeletes();
        });
    }
}
