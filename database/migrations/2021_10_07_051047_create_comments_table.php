<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumtext('body');

             //adding Fk to comments table from user
             $table->unsignedBigInteger('user_id');
             $table->foreign('user_id')->references('id')->on('users');

              //adding Fk to comments table from user
              $table->unsignedBigInteger('pst_id');
              $table->foreign('pst_id')->references('id')->on('posts')->onDelete('cascade');

             
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
        Schema::dropIfExists('comments');
    }
}
