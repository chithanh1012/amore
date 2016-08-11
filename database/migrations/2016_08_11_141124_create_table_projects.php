<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name');
            $table->string('slug');
            $table->text('decription');
            $table->string('image');
            $table->float('bugget')->comment = 'Ngan sach';
            $table->string('duration')->comment = 'Thoi gian hoan thanh';
            $table->float('acreage')->comment = 'Dien tich';
            $table->date('start_time')->comment = 'Thoi gian bat dau';
            $table->date('end_time')->comment = 'Thoi gian hoan thanh';
            $table->text('content');
            $table->string('name_customer');
            $table->string('image_customer');
            $table->string('comment_customer');
            $table->string('phone_customer');
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
        Schema::drop('projects');
    }
}
