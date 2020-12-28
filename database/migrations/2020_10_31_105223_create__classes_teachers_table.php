<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id')->unsigned();
            $table->integer('teacher_id')->unsigned();

        });

        Schema::table('classes_teachers', function (Blueprint $table) {

            $table->foreign('class_id')
                ->on('classes')
                ->references('id')
                ->onUpdate('cascade');

            $table->foreign('teacher_id')
                ->on('teacher')
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
        Schema::dropIfExists('_classes_teachers');
    }
}
