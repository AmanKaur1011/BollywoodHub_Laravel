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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('songName');
            $table->string('singer');
            $table->string('songGenre');
            $table->string('userRating');
            $table->string('imagePath');
            $table->string('videoId');
            $table->unsignedBigInteger('movie_id');
            $table->date('releaseDate');
            $table->softDeletes();
            $table->timestamps();

               // Foreign key constraint
        $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
