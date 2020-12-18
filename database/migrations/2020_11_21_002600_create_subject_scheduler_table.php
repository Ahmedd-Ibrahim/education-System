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
            $table->bigInteger('subject_mini_group_id')->unsigned();
            $table->integer('class_id')->unsigned();
            $table->bigInteger('group_id')->unsigned();
            $table->integer('year_id')->unsigned();
            $table->integer('day_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('subject_scheduler', function (Blueprint $table) {
            $table->foreign('subject_id')->on('subjects')->references('id')->onUpdate('cascade');
            $table->foreign('teacher_id')->on('teacher')->references('id')->onUpdate('cascade');

            $table->foreign('subject_mini_group_id')
                ->on('subject_mini_groups')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('class_id')
                ->on('classes')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('group_id')
                ->on('groups')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('year_id')
                ->on('phase_years')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('day_id')
                ->on('days')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
