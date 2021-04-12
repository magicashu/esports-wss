<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTest1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test1', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('game_id')->default("1");
            $table->string('username')->default(NULL);
            $table->integer('kills');
            $table->integer('deaths');
            $table->json('points');
            $table->timestamps();
            // $table->foreign('game_id')->references('game_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test1');
    }
}
