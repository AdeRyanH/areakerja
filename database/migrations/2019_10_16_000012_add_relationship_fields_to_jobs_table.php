<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToJobsTable extends Migration
{
    public function up()
    {
        Schema::table('jobs', static function (Blueprint $table) {
            // $table->unsignedInteger('location_id');

            // // $table->foreign('location_id', 'location_fk_476211')->references('id')->on('locations');
            // $table->foreign('location_id')->references('id')->on('locations')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('company_id');

            // $table->foreign('company_id', 'company_fk_476511')->references('id')->on('companies');
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
        });
    }
}