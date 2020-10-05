<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('answer');
            $table->string('question');
            $table->integer('value');
            $table->string('airdate')->nullable();
            $table->date('air_date')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
	
	          $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
