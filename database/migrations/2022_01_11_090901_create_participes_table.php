<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id'); 
            $table->unsignedBigInteger('user_id'); 
            $table->date('date_participe'); 
            $table->foreign('program_id')->references('id')->on('programs');
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
        Schema::dropIfExists('participes');
    }
}