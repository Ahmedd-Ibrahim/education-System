<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhaseYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phase_years', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('yearsCount');
            $table->integer('phase')->unsigned();

        });

        Schema::table('phase_years', function (Blueprint $table) {

            $table->foreign('phase')
                ->on('phases')
                ->references('id')
                ->onDelete('cascade')
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
        Schema::dropIfExists('phase_years');
    }
}
