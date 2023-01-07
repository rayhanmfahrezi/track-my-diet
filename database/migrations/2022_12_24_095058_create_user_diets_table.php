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
        Schema::create('user_diets', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('age');
            $table->string('gender', 20);
            $table->smallInteger('weight');
            $table->smallInteger('height');
            $table->string('activity', 20);
            $table->string('goal', 20);
            $table->smallInteger('bmr');
            $table->smallInteger('calories_needed');
            // $table->smallInteger('bmi_score');
            // $table->string('bmi_status', 20);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('user_diets');
    }
};
