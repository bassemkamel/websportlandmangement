<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_participant');
            $table->string('prenom_participant');
            $table->string('tel_participant');
            $table->string('country_participant');
            $table->string('ville_participant');
            $table->string('gender_participant');
            $table->string('image_participant')->default('/img/default-avatar.png');
            $table->string('image_couverture_participant');
            $table->string('email_participant');
            $table->timestamp('email_verified_at')->nullable();
            // $table->string('password_participant');
            $table->integer('poids_participant');
            $table->date('date_naissance_participant');
            $table->boolean('etat_participant');
            $table->boolean('etat_juge');
            $table->boolean('etat_coach');
            $table->boolean('etat_organisateur');
            $table->string('etat')->default('enable');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
