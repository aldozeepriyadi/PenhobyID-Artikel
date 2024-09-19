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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id'); // Kolom primary key dengan auto-increment
            $table->string('name', 255); // Nama produk dengan panjang maksimal 255 karakter
            $table->text('description')->nullable(); // Deskripsi produk, bersifat nullable
            $table->decimal('price', 10, 2); // Harga produk dengan 10 digit total dan 2 digit desimal
            $table->unsignedBigInteger('community_id'); // Foreign key ke tabel communities
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Status produk
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
            $table->unsignedBigInteger('created_by'); // Foreign key untuk user yang membuat produk
            $table->unsignedBigInteger('modified_by')->nullable(); // Foreign key untuk user yang memodifikasi produk (nullable)

            // Definisikan foreign key
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
        Schema::dropIfExists('products');
    }
};
