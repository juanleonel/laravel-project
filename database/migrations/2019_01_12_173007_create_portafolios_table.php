<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortafoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portafolios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('project_name',128);
            $table->text('description');
            $table->string('image');
            $table->string('link');

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
        Schema::dropIfExists('portafolios');
    }
}
