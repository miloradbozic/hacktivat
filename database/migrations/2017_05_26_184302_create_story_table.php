<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('image_url');
            $table->string('video_url')->nullable();
            //$table->char('audio')->nullable();
            //$table->text('average_rating')->nullable();
            $table->double('lat', 15, 8)->nullable();
            $table->double('lon', 15, 8)->nullable();
            $table->integer('author_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('story');
    }
}
