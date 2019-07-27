<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_invites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->softDeletes();
            $table->timestamps();

            $table->bigInteger('classroom_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->string('title')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->text('message')->nullable()->default(null);

            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classroom_invites');
    }
}
