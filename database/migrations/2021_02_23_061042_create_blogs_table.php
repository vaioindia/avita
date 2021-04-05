<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{

    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc');
            $table->text('short_desc');
            $table->string('image');
            $table->string('published')->nullable();
            $table->date('published_at')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
