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
        Schema::create('article_images', function (Blueprint $table) {
            $table->id('image_id'); // Kolom ID dengan auto-increment
            $table->unsignedBigInteger('article_id'); // Kolom article_id sebagai foreign key
            $table->string('image_url', 255); // URL gambar
            $table->timestamp('uploaded_at')->useCurrent(); // Kolom timestamp dengan nilai default sekarang

            // Definisikan foreign key
            $table->foreign('article_id')->references('article_id')->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_images');
    }
};
