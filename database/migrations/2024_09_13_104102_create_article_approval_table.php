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
        Schema::create('article_approval', function (Blueprint $table) {
            $table->id('approval_id'); // Kolom ID dengan auto-increment
            $table->unsignedBigInteger('article_id'); // Kolom article_id sebagai foreign key
            $table->unsignedBigInteger('reviewer_id'); // Kolom reviewer_id sebagai foreign key
            $table->enum('status', ['approved', 'rejected', 'revision_required']); // Status approval
            $table->text('comments')->nullable(); // Kolom komentar, nullable jika tidak ada komentar
            $table->timestamp('approved_at')->useCurrent(); // Kolom waktu persetujuan dengan nilai default sekarang

            // Definisikan foreign key
            $table->foreign('article_id')->references('article_id')->on('articles')->onDelete('cascade');
            $table->foreign('reviewer_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_approval');
    }
};
