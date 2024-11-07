<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
  public function up()
  {
    Schema::create('posts', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('slug')->unique();
      $table->text('content');
      $table->string('category');
      $table->unsignedBigInteger('writer_id');
      $table->foreign('writer_id')->references('id')->on('writers');
      $table->timestamp('published_at');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('posts');
  }
}
