<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('teams', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('address');
          $table->string('phone');
          $table->integer('league_id')->unsigned();
          $table->integer('manager_id')->unsigned();
          $table->timestamps();

          $table->foreign('league_id')->references('id')->on('leagues');
          $table->foreign('manager_id')->references('id')->on('managers');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
