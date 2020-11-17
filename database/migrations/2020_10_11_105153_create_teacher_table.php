<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->date('bdate');
            $table->enum('gender',['male','female']);
            $table->text('desc')->nullable(true);
            $table->string('avatar',255)->nullable(true);
            $table->string('phone')->nullable(true);
            $table->integer('subject_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('teacher', function (Blueprint $table) {

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
        Schema::dropIfExists('teacher');
    }
}
