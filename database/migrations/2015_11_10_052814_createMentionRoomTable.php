<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentionRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mention_room', function (Blueprint $table) {
            $table->increments('id');
            $table->date('mention_day');
            $table->integer('mention_id')->unsigned();
            $table->foreign('mention_id')->references('id')->on('mentions')->onDelete('cascade');
            $table->integer('court_id')->unsigned();
            $table->foreign('court_id')->references('id')->on('court')->onDelete('cascade');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
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
        Schema::drop('mention_room');
    }
}
