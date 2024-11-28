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
            $table->id(); // Auto-increment primary key
            $table->string('title'); // Judul buku
            $table->string('author'); // Penulis buku
            $table->string('publisher'); // Penerbit
            $table->text('overview'); // Deskripsi buku
            $table->string('read_time')->nullable(); // Perkiraan waktu baca, opsional
            $table->date('release_date'); // Tanggal rilis
            $table->string('image_url')->nullable(); // URL gambar buku, opsional
            $table->timestamps(); // Kolom created_at dan updated_at
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
