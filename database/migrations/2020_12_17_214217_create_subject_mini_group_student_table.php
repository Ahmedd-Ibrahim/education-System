<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectMiniGroupStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_mini_group_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('subject_mini_group_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('subject_mini_group_student', function (Blueprint $table) {

            $table->foreign('subject_mini_group_id')
                ->on('subject_mini_groups')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('student_id')
                ->on('students')
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
        Schema::dropIfExists('subject_mini_group_student');
    }
}
