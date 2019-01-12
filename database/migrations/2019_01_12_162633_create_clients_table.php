<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',128);
            $table->string('last_name',128);
            $table->string('street',128);
            $table->string('city',128);
            $table->string('state',128);
            $table->string('zip_code',10)->nullable();
            $table->string('email',128)->unique();
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
        Schema::dropIfExists('clients');
    }
}
