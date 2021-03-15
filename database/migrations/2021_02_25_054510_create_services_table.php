<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->bigInteger('phone')->unique()->nullable();
            $table->string('address',1000)->unique()->nullable();
            $table->time('opening_hour')->nullable();
            $table->time('closing_hour')->nullable();
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
        Schema::dropIfExists('services');
    }
}
