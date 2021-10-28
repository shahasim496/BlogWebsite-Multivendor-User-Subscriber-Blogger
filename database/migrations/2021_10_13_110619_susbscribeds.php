<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Susbscribeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('Susbscribeds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('b_id');
            $table->integer('s_id');

            $table->foreign('b_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('s_id')->references('id')->on('users')->onDelete('cascade');
           
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
        //
    }
}
