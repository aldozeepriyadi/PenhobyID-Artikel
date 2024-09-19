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
        Schema::create('product_approval', function (Blueprint $table) {
            $table->id('approval_id'); // Kolom primary key dengan auto-increment
            $table->unsignedBigInteger('product_id'); // Foreign key ke tabel products
            $table->unsignedBigInteger('reviewer_id'); // Foreign key ke tabel users (reviewer)
            $table->enum('status', ['approved', 'rejected', 'pending'])->default('pending'); // Status approval produk
            $table->text('comments')->nullable(); // Kolom komentar reviewer, bersifat nullable
            $table->timestamp('reviewed_at')->useCurrent(); // Waktu review dengan nilai default saat ini

            // Definisikan foreign key
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->foreign('reviewer_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_approval');
    }
};
