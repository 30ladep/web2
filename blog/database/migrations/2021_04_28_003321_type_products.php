<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TypeProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeProducts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_name');
            $table->integer('manu_id')->unsigned();
            $table->foreign('manu_id')->references('id')->on('manufacture');
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
        Schema::dropIfExists('typeProducts');
    }
}
