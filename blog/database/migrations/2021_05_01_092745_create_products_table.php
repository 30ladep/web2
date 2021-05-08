<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('image');
            $table->integer('count');
            $table->float('price');
            $table->integer('sold');
            $table->double('size');
            $table->tinyInteger('hot');
            $table->text('note');
            $table->date('create_date');
            $table->integer('view');
            $table->string('color');
            $table->string('gender');
            $table->integer('type_id');
            $table->foreign('type_id')->references('id')->on('type_products');
            $table->integer('manu_id');
            $table->foreign('manu_id')->references('id')->on('manufactures');
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
        Schema::dropIfExists('products');
    }
}
