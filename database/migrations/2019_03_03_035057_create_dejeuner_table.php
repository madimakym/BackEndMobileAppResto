<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDejeunerTable extends Migration
{
  
    public function up()
    {
        Schema::create('dejeuner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle')->nullable();
            $table->text('description')->nullable(); 
            $table->integer('prix')->nullable(); 
            $table->string('image')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dejeuner');
    }
}
