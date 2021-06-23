<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) 
        {
            $table->id();
            $table->timestamps();

            $table->biginteger('sid')->unsigned();
            $table->foreign('sid')->references('id')->on('users')->onDelete('cascade');

            $table->string('title', 128);
            $table->string('author', 32);
            $table->string('publisher', 64)->nullable();
            $table->string('ISBN', 32)->unique();
            $table->double('price', 10, 2)->nullable();

            $table->tinyInteger('ready')->default(1);
            $table->dateTime('pub_date')->nullable();
            $table->string('photo_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
