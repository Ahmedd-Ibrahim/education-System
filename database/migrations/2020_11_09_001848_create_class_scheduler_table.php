<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassSchedulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_scheduler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('class_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('class_scheduler', function (Blueprint $table) {

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
        Schema::dropIfExists('class_scheduler');
    }
}
