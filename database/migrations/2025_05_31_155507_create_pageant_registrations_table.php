<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageantRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pageant_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('language')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('profession')->nullable();
            $table->string('institute')->nullable();
            $table->text('experience')->nullable();
            $table->text('reason')->nullable();
            $table->integer('height')->nullable();
            $table->string('eye_color')->nullable();
            $table->integer('weight')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('hair_length')->nullable();
            $table->string('chest')->nullable();
            $table->string('body_type')->nullable();
            $table->string('waist')->nullable();
            $table->string('skills')->nullable();
            $table->string('hips')->nullable();
            $table->string('dress_size')->nullable();
            $table->string('shoe_size')->nullable();
            $table->string('full_photo')->nullable();
            $table->string('headshot_photo')->nullable();
            $table->string('id_copy')->nullable();
            $table->string('aadhar')->nullable();
            $table->string('close_shot')->nullable();
            $table->string('no_makeup')->nullable();
            $table->string('miss_shot')->nullable();
            $table->string('ramp_walk_video')->nullable();
            $table->boolean('declaration')->default(false);
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
        Schema::dropIfExists('pageant_registrations');
    }
}
