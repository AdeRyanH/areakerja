<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', static function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->unsignedInteger('sent')->nullable();
            $table->foreign('sent', 'sent_id_fk_202107291')->references('id')->on('users');
            $table->unsignedInteger('receive')->nullable();
            $table->foreign('receive', 'receive_id_fk_202107292')->references('id')->on('users');
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
        Schema::dropIfExists('chats');
    }
}
