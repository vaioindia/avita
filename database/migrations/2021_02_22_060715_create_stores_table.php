<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
   
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->string('name');
            $table->string('email');
            $table->string('address',1000);
            $table->string('opening_hour');
            $table->bigInteger('phone');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
