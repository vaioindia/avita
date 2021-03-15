<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblExclusivebrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_exclusivebrands', function (Blueprint $table) {
            $table->id();
            $table->double('latitude', 10);
            $table->double('longitude', 10);
            $table->string('name');
            $table->string('email');
            $table->string('address',1000);
            $table->string('opening_hour');
            $table->string('closing_hour');
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
        Schema::dropIfExists('tbl_exclusivebrands');
    }
}
