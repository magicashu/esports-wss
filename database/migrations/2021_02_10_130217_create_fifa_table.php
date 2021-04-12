<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFifaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fifa', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('game_id')->default('1');
            $table->string('username');
            $table->string('teams');
            $table->integer('goals');
            $table->string('cards');
            $table->integer('fouls');
            $table->float('points');
            $table->timestamps();
            // $table->foreign('game_id')
            // ->references('game_id')
            // ->on('users')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fifa');
    }
}
