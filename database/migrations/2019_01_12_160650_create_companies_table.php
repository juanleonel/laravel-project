<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('view',128);
            $table->string('mission',128);
            $table->mediumText('description_view',128);
            $table->mediumText('description_mission',128);
            $table->string('image_view')->nullable();
            $table->string('image_mission')->nullable();
            $table->string('email',128)->unique();
            $table->string('link_facebook');
            $table->timestamps();
            // agregar la relacion con clients segun el diagrama
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
