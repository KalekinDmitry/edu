<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('serial_number');//to make user to be able to change an order of questions
            $table->integer('cost');//how much points we get answering this question
            $table->integer('type');//0 - radio, 1 - combo, 2 - (to do)
            $table->bigInteger('lesson_id')->unsigned();
            $table->text('text');
            $table->string('image_link')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('lesson_id')->references('id')->on('lessons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_questions');
    }
}
