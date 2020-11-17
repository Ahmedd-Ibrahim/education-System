<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaySubjectSchedulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_subject_scheduler', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('day_id')->unsigned();
            $table->integer('subject_scheduler_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('day_subject_scheduler', function (Blueprint $table) {
           $table->foreign('day_id')->on('days')->references('id')->onUpdate('cascade')->onDelete('cascade');
           $table->foreign('subject_scheduler_id')->on('subject_scheduler')->references('id')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_subject_scheduler');
    }
}
