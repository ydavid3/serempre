<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SrUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sr_users', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('password');
            $table->integer('role')->unsigned();
            $table->foreign('role')->references('id')->on('sr_roles');
            $table->integer('client')->unsigned()->nullable();
            $table->foreign('client')->references('id')->on('sr_client');

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sr_users');
    }
}
