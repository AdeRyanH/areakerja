<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');

            $table->json('full_description')->nullable();

            $table->json('requirements')->nullable();
            
            $table->string('categories_id')->nullable();

            $table->string('job_nature')->nullable();

            $table->string('address')->nullable();

            $table->string('pendidikan')->nullable();

            $table->string('gender')->nullable();

            $table->string('umur')->nullable();

            $table->string('lokasikerja')->nullable();

            $table->string('bataslamaran')->nullable();

            $table->string('email')->nullable();

            $table->string('notelp')->nullable();

            $table->string('website')->nullable();

            $table->boolean('top_rated')->default(0)->nullable();

            $table->string('salary');

            $table->string('slug')->nullable();

            $table->timestamps();

            $table->softDeletes();

            $table->boolean('status')->default(0)->nullable();
        });
    }
}