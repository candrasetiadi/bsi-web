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
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('title',255);
            $table->string('slug',255);
            $table->string('description',200);
            $table->string('image',50);
            $table->text('content');
            $table->integer('tag')->nullable();
            $table->string('creator',200);
            $table->integer('created_by');
            $table->date('publish_date');
            $table->integer('publish_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->enum('status',['draft','publish'])->default('draft');
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
        Schema::dropIfExists('articles');
    }
}
