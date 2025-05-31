<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob')->nullable();
            $table->string('language')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('coatless_number')->nullable();
            $table->string('email');
            $table->string('address')->nullable();
            $table->integer('height')->nullable();
            $table->string('nationality')->nullable();
            $table->integer('weight')->nullable();
            $table->string('city')->nullable();
            $table->string('instagram')->nullable();
            $table->string('profession')->nullable();
            $table->string('facebook')->nullable();
            $table->string('institute')->nullable();
            $table->string('other')->nullable();
            $table->text('experience')->nullable();
            $table->text('reason')->nullable();
            $table->string('photo')->nullable();
            $table->string('handling_photo')->nullable();
            $table->string('id_copy')->nullable();
            $table->string('audio_card')->nullable();
            $table->boolean('declaration')->default(false);
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
        Schema::dropIfExists('registrations');
    }
}
