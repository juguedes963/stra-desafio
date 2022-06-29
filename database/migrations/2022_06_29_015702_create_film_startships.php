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
        Schema::create('film_startships', function (Blueprint $table) {
            $table->integer('film_id')->unsigned();

            $table->integer('startships_id')->unsigned();
        
            $table->foreign('film_id')->references('id')->on('films')
        
                ->onDelete('cascade');
        
            $table->foreign('startships_id')->references('id')->on('startships')
        
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_startships');
    }
};
