<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('meal_type_id')->unsigned();
            $table->string('student_name', 50)->unique();
            $table->string('meal_name', 50)->unique();
            $table->string('meal_type', 50);
            // $table->foreign('meal_type_id')->references('id')->on('meal_types')->onDelete('cascade');
            $table->foreign('meal_id')->references('id')->on('meal_types');
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
        Schema::dropIfExists('meals');
    }
}
