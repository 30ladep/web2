<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');;
            $table->string('UserName');
            $table->string('PassWord');
            $table->string('FullName');
            $table->unique('Email');
            $table->string('Phone');
            $table->timestamps('CreateDate');
            $table->remember_token('LoginCart');
            $table->string('TokenCart');
            $table->int('TypeUserID');
          
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
