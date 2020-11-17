<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectSchedulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_scheduler', function (Blueprint $table) {
            $table->increments('id');
            $table->text('desc')->nullable();
            $table->time('start_at');
            $table->time('end_at');
            $table->integer('subject_id')->unsigned();
            $table->integer('teacher_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('subject_scheduler', function (Blueprint $table) {
            $table->foreign('subject_id')->on('subjects')->references('id')->onUpdate('cascade');
            $table->foreign('teacher_id')->on('teacher')->references('id')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_scheduler');
    }
}
