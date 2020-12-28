<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subject', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('subject_id')->unsigned();

        });
        Schema::table('student_subject', function (Blueprint $table) {
         $table->foreign('student_id')
             ->on('students')
             ->references('id')
            ->onUpdate('cascade');

         $table->foreign('subject_id')
             ->on('subjects')
             ->references('id')
             ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_subject');
    }
}
