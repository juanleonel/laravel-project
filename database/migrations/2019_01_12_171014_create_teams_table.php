<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
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
            $table->string('first_name',128);
            $table->string('last_name',128);
            $table->string('image',128);
            $table->string('position',128);
            $table->string('network',128);
            $table->string('description',128);
            $table->timestamps();

            // relations
            
            $table->integer('company_id')->unsigned();

            $table->foreign('company_id')
              ->references('id')->on('companies')
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
        Schema::dropIfExists('teams');
    }
}
