<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageanttitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pageanttitles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('best_male');
            $table->string('fm_runner_up')->nullable();
            $table->string('sm_runner_up')->nullable();
            $table->string('best_female');
            $table->string('ff_runner_up')->nullable();
            $table->string('sf_runner_up')->nullable();
            $table->softDeletes(); 
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
        Schema::dropIfExists('pageanttitles');
    }
}
