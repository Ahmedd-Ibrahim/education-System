<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->date('bdate');
            $table->string('phone')->nullable();
            $table->text('address');
            $table->enum('gender',['male','female']);
            $table->text('desc')->nullable(true);
            $table->string('avatar',255)->nullable(true);

            $table->integer('class_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('students', function (Blueprint $table) {
            $table->foreign('class_id')
                ->on('classes')
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
        Schema::dropIfExists('students');
    }
}
