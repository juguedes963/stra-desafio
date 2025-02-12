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
        Schema::create('startships', function (Blueprint $table) {
            $table->id("id");
            $table->string("name");
            $table->string("model");
            $table->string("manufacturer");
            $table->string("cost_in_credits");
            $table->string("length");
            $table->string("max_atmosphering_speed");
            $table->string("crew");
            $table->string("passengers");
            $table->string("cargo_capacity");
            $table->string("consumables");
            $table->string("vehicle_class");
            $table->string("MGLT");
            $table->string("starship_class");
            $table->json("pilots");
            $table->json("films");
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
        Schema::dropIfExists('startships');
    }
};
