<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechspecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techspecs', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('spec');
            $table->string('value');
            $table->boolean('is_cond')->default(false);
            $table->text('disclaimer');

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
        Schema::dropIfExists('techspecs');
    }
}
