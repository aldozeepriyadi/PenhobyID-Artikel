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
        Schema::create('articles', function (Blueprint $table) {
            $table->id('article_id'); // Kolom ID dengan auto-increment
            $table->string('title', 255); // Kolom title dengan panjang maksimal 255 karakter
            $table->text('content'); // Kolom content untuk menyimpan teks panjang
            $table->string('image_url', 255)->nullable(); // Kolom URL gambar yang bersifat opsional (nullable)
            $table->unsignedBigInteger('author_id'); // Kolom author_id sebagai foreign key
            $table->unsignedBigInteger('community_id'); // Kolom community_id sebagai foreign key
            $table->enum('status', ['submitted', 'approved', 'rejected', 'revision_required'])->default('submitted'); // Status artikel
            $table->timestamps(); // Kolom created_at dan updated_at
            $table->unsignedBigInteger('created_by'); // Kolom created_by sebagai foreign key
            $table->unsignedBigInteger('modified_by')->nullable(); // Kolom modified_by yang bisa null

            // Definisikan foreign key
            $table->foreign('author_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('community_id')->references('community_id')->on('communities')->onDelete('cascade');
            $table->foreign('created_by')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('modified_by')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
