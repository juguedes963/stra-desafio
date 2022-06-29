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
        Schema::create('films', function (Blueprint $table) {

            $table->id("id");
            $table->string("title");
            $table->string("episode_id");
            $table->string("opening_crawl");
            $table->string("director");
            $table->string("producer");
            $table->string("release_date");
            $table->json("characters");
            $table->json("planets");
            $table->json("starships");
            $table->json("vehicles");
            $table->json("species");
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
        Schema::dropIfExists('films');
    }
};
