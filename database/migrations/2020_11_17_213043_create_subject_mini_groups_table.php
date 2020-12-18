<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectMiniGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_mini_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('subject_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('subject_mini_groups', function (Blueprint $table) {
            $table->foreign('subject_id')
                ->on('subjects')
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
        Schema::dropIfExists('subject_mini_groups');
    }
}
