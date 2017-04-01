<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_send', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('professionId')->references('id')->on('professions');
            $table->integer('resumeId')->references('id')->on('resumes');
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
        Schema::table('user_send', function (Blueprint $table) {
            //
        });
    }
}