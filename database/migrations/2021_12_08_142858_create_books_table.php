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
    //title, author, release, price
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); //ini gada di model karena dia udh automatis jadi primary key
            $table->string('title')->unique();
            $table->string('author');
            $table->date('release')->nullable();
            $table->integer('price');
            $table->unsignedBigInteger('genreId');
            $table->foreign('genreId')->references('id')->on('genres'); //foreign nama foreign key di id di table genres (ada di migration)
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
        Schema::dropIfExists('books');
    }
}
