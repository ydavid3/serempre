<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SrMunicipality extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sr_municipalities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod', 80);
            $table->string('name', 30);
            $table->boolean('state')->default(false);
            $table->integer('department')->unsigned();
            $table->foreign('department')->references('id')->on('sr_departments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sr_municipalities');
    }
}
