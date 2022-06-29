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
        Schema::create('film_people', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('film_id')->unsigned();

            $table->integer('people_id')->unsigned();
        
            $table->foreign('film_id')->references('id')->on('films')
        
                ->onDelete('cascade');
        
            $table->foreign('people_id')->references('id')->on('people')
        
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
        Schema::dropIfExists('film_people');
    }
};
