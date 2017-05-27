<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tour', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            //$table->text('average_rating')->nullable();
            $table->integer('author_id')->nullable();
            $table->decimal('price', 5, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tour');
    }
}
