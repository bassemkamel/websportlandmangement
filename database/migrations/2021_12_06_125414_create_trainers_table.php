<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tel_trainer');
            $table->string('country_trainer');
            $table->string('ville_trainer');
            $table->string('gender_trainer');
            $table->string('image_trainer')->default('/img/avatar.png');
            $table->string('image_couverture_trainer');
            // $table->string('password_trainer');
            $table->date('date_naissance_trainer');
            $table->string('fee_trainer');
            $table->string('etat')->default('enable');
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users');
            $table->rememberToken();
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
        Schema::dropIfExists('trainers');
    }
}
