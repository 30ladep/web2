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
            $table->integer('count');
            $table->string('image');
            $table->float('price');
            $table->double('size');
            $table->tinyInteger('hot');
            $table->text('note');
            $table->date('create_date');
            // $table->integer('color_id');
            // $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->string('color');
            $table->string('gender');
            $table->integer('type_id');
            $table->foreign('type_id')->references('id')->on('type_products')->onDelete('cascade');
            $table->integer('manu_id');
            $table->foreign('manu_id')->references('id')->on('manufactures')->onDelete('cascade');
            $table->integer('sold');
            $table->integer('view');
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
