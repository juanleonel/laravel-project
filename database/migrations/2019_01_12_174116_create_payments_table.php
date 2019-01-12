<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('card_number');
            $table->dateTime('expiration_date_card');
            $table->string('name_card');
            $table->string('security_number_card');
            $table->unsignedDecimal('amount_paid', 8, 2);
            
            // relations

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')
              ->references('id')->on('clients')
              ->onDelete('cascade')->onUpdate('cascade');

            // habra relacion con el servicio ?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
