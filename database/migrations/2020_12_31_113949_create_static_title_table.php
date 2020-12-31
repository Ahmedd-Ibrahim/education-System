<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaticTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('static_title', function (Blueprint $table) {
            $table->increments('id');
            $table->text('welcome_title')->nullable();
            $table->text('welcome_desc')->nullable();
            $table->text('welcome_provide_title')->nullable();
            $table->text('welcome_provide_sub_title')->nullable();
            // End of provide section

            $table->text('smoth_title')->nullable();
            $table->text('somth_desc')->nullable();
            // End of smoth description

            $table->text('professional_title')->nullable();
            $table->text('professional_sub_title')->nullable();
            // End of professional

            $table->text('subject_title')->nullable();
            $table->text('subject_sub_title')->nullable();
            // End of sub

            $table->text('experince_title')->nullable();
            
            // End of experince

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('static_title');
    }
}
