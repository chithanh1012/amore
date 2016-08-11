<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('slug');
            $table->string('image_avatar');
            $table->string('image_content');
            $table->string('colors')->comment = 'save type json';
            $table->text('content');
            $table->integer('category_id');
            $table->integer('number');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('tags');
            $table->tinyInteger('status');
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
        Schema::drop('products');
    }
}
