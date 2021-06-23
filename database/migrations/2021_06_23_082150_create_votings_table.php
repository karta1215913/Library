<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votings', function (Blueprint $table) 
        {
            $table->id();
            $table->timestamps();

            $table->biginteger('bid')->unsigned();
            $table->foreign('sid')->references('id')->on('users')->onDelete('cascade');

            $table->biginteger('sid')->unsigned();
            $table->foreign('bid')->references('id')->on('books')->onDelete('cascade');

            $table->dateTime('voting_date')->default(now());
            $table->unique(['sid', 'bid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votings');
    }
}
