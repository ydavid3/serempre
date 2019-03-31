<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SrClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sr_client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod', 80);
            $table->string('name', 100);
            $table->boolean('state')->default(false);
            $table->integer('municipality')->unsigned();
            $table->foreign('municipality')->references('id')->on('sr_municipalities');
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
        Schema::dropIfExists('sr_client');
    }
}
