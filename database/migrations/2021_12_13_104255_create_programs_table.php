<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_program');
            $table->integer('nombre_seance')->default(1);
            $table->float('prix_seance');
            $table->date('program_date_debut');
            $table->date('program_date_fin');
 
            $table->boolean('monday')->default(false);
            $table->time('monday_debut_seance')->default("00:00");
            $table->time('monday_fin_seance')->default("00:00");

            $table->boolean('tuesday')->default(false);
            $table->time('tuesday_debut_seance')->default("00:00");
            $table->time('tuesday_fin_seance')->default("00:00");


            $table->boolean('wednesday')->default(false);
            $table->time('wednesday_debut_seance')->default("00:00");
            $table->time('wednesday_fin_seance')->default("00:00");


            $table->boolean('thursday')->default(false);
            $table->time('thursday_debut_seance')->default("00:00");
            $table->time('thursday_fin_seance')->default("00:00");

            $table->boolean('friday')->default(false);
            $table->time('friday_debut_seance')->default("00:00");
            $table->time('friday_fin_seance')->default("00:00");

            $table->boolean('saturday')->default(false);
            $table->time('saturday_debut_seance')->default("00:00");
            $table->time('saturday_fin_seance')->default("00:00");


            $table->boolean('sunday')->default(false);
            $table->time('sunday_debut_seance')->default("00:00");
            $table->time('sunday_fin_seance')->default("00:00");

            $table->string('etat')->default('enable');

            
            $table->unsignedBigInteger('sport_id'); 
            $table->unsignedBigInteger('location_id'); 
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('sport_id')->references('id')->on('sports');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('programs');
    }
}
