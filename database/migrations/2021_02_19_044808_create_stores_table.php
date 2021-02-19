<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('name');
            $table->string('email');
            $table->string('address',1000);
            $table->string('opening_hour');
            $table->integer('phone');
            $table->timestamp();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('store');
    }
}
