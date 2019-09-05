<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLessonSerialNumberAndPassingScore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('lessons', function(Blueprint $table){
            $table->integer('serial_number');
            $table->integer('passing_score');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('lessons', function (Blueprint $table)
        {
            $table->dropColumn('serial_number');
            $table->dropColumn('passing_score');
        });
    }
}
