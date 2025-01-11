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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('merk'); // Tambahkan kolom merk
            $table->date('tahun_terbit'); // Tambahkan kolom tahun terbit
            $table->timestamps();
        });
    }
    
};
