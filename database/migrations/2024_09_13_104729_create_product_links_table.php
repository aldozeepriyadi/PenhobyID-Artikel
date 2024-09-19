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
        Schema::create('product_links', function (Blueprint $table) {
            $table->id('link_id'); // Kolom primary key dengan auto-increment
            $table->unsignedBigInteger('product_id'); // Foreign key ke tabel products
            $table->string('platform_name', 255); // Nama platform tempat produk dijual
            $table->string('url', 255); // URL produk di platform tersebut
            $table->timestamps(); // Kolom created_at dan updated_at otomatis

            // Definisikan foreign key
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_links');
    }
};
