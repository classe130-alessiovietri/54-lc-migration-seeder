<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            /* Crea una colonna che si chiama id che è un unsigned big integer auto increment con primary key */
            $table->id();
            // $table->bigInteger('id')->unsigned()->autoIncrement();
            // oppure
            // $table->unsignedBigInteger('id')->autoIncrement();
            // oppure
            // $table->bigIncrements('id')->unsigned();
            // $table->primary('id');
            $table->string('title', 128);
            $table->string('author', 64);
            $table->year('year')->nullable();
            $table->string('genre', 32)->nullable();
            $table->boolean('published')->default(true);
            $table->string('publisher', 64)->nullable();
            $table->text('plot')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
