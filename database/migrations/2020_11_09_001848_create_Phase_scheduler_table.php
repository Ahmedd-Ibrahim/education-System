<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhaseSchedulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Phase_scheduler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('phase_id')->unsigned();
            $table->enum('active',['true','false'])->default('false');
            $table->timestamps();
        });

        Schema::table('Phase_scheduler', function (Blueprint $table) {

            $table->foreign('phase_id')
                ->on('phases')
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
        Schema::dropIfExists('Phase_scheduler');
    }
}
