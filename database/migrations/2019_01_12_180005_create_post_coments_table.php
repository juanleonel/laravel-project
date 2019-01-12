<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostComentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_coments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message',128);
            $table->timestamps();
            $table->dateTime('date_coment');


            // relations
            
            $table->integer('post_id')->unsigned();

            $table->foreign('post_id')
              ->references('id')->on('posts')
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
        Schema::dropIfExists('post_coments');
    }
}
