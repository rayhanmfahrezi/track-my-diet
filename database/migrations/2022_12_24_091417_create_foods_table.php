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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('category', 20);
            $table->longText('description');
            $table->longText('ingredient');
            $table->longText('instruction');
            $table->smallInteger('calories');
            $table->float('carbs', 6, 2);
            $table->float('fat', 6, 2);
            $table->float('protein', 6, 2);
            $table->string('serving_size', 20);

            $table->boolean('like');
            $table->smallInteger('like_count');
            $table->boolean('saved');
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
        Schema::dropIfExists('foods');
    }
};
