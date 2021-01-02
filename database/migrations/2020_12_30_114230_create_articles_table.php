<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('header_image');
            $table->string('main_image');
            $table->string('title');
            $table->string('slug');
            $table->longText('body');
            $table->longText('short_info');
            $table->longText('tags');
            $table->longText('author_id');
            $table->integer('hit')->default(0);
            $table->integer('status')->default(1)->comment('0:passive, 1 active');
            $table->softDeletes();
            $table->timestamps();

        });
    }
}
