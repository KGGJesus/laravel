<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\migrations\migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->date('published_at');
            $table->text('summary');
            $table->timestamps();

        });
    }
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
