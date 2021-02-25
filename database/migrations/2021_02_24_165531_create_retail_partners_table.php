<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retail_partners', function (Blueprint $table) {
            $table->id();
            $table->decimal('latitude', 10);
            $table->decimal('longitude', 10);
            $table->string('name');
            $table->string('email');
            $table->string('address',1000);
            $table->string('opening_hour');
            $table->bigInteger('phone');
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
        Schema::dropIfExists('retail_partners');
    }
}
