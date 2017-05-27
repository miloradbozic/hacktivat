<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourSegmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_segment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('segment_id');
            $table->text('description');
            $table->datetime('time');
            $table->integer('story_id')->nullable();
            $table->double('lat', 15, 8)->nullable();
            $table->double('lon', 15, 8)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tour_segment');
    }
}
