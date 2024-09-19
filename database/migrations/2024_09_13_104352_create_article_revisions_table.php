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
        Schema::create('article_revisions', function (Blueprint $table) {
            $table->id('revision_id'); // Kolom primary key dengan auto-increment
            $table->unsignedBigInteger('article_id'); // Foreign key ke tabel articles
            $table->text('content'); // Kolom untuk menyimpan revisi konten artikel
            $table->timestamp('revised_at')->useCurrent(); // Waktu revisi dengan nilai default saat ini
            $table->unsignedBigInteger('revised_by'); // Foreign key untuk user yang melakukan revisi

            // Definisikan foreign key
            $table->foreign('article_id')->references('article_id')->on('articles')->onDelete('cascade');
            $table->foreign('revised_by')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_revisions');
    }
};
