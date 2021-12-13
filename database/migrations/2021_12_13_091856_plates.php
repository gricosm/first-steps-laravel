<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Plates extends Migration
{
    public function up()
    {
        Schema::create('plates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('comensales');
            $table->boolean('gluten_free');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plates');
    }
}
