<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_report', function (Blueprint $table) {
            $table->increments('id');
            $table->date('report_date');
            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable();
            $table->integer('student_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('health_report', function (Blueprint $table) {
            $table->foreign('student_id')
                ->on('students')
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
        Schema::dropIfExists('health_report');
    }
}
