<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritersTable extends Migration
{
  public function up()
  {
    Schema::create('writers', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('slug')->unique();
      $table->text('bio');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('writers');
  }
}
