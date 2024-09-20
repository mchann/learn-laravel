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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('konten');
            $table->timestamps();
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('penulis_id');


            // buat foreign key
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->foreign('penulis_id')->references('id')->on('penulis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
