<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('e-mail');
            $table->string('comment');
            $table->boolean('approved');
            $table->integer('post_id')->unsigned();
            $table->timestamps();

        });
        Schema::table('comments', function ($table) {
            $table->foreign('post_id')->references('id')->on('articles')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:dropForeign('post_id');
        Schema::drop('comments');

    }
}
