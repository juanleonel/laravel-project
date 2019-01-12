<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedDecimal('porcentage_skill', 8, 2);
            $table->timestamps();
            
            // relations
            
            $table->integer('skill_id')->unsigned();

            $table->foreign('skill_id')
              ->references('id')->on('skills')
              ->onDelete('cascade')->onUpdate('cascade');



            $table->integer('team_id')->unsigned();
            
            $table->foreign('team_id')
              ->references('id')->on('teams')
              ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_teams');
    }
}
