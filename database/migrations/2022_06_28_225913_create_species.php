<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('species', function (Blueprint $table) {
            $table->id("id");
            $table->string("name");
            $table->string("classification");
            $table->string("designation");
            $table->string("average_height");
            $table->string("skin_colors");
            $table->string("hair_colors");
            $table->string("eye_colors");
            $table->string("average_lifespan");
            $table->string("homeworld");
            $table->string("language");
            $table->json("people");
            $table->json("films");
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('species');
    }
};
