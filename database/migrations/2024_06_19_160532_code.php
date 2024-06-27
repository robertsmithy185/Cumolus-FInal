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
        Schema::create('codes', function (Blueprint $table) {
            $table->id('code_id'); // Kolom primary key, tipe data integer auto-increment
            $table->string('username'); // Kolom untuk menyimpan username pengguna
            $table->string('code'); // Kolom untuk menyimpan path atau nama file kode
            $table->string('name'); // Kolom untuk menyimpan nama
            $table->text('Deskripsi'); // Kolom untuk menyimpan deskripsi
            $table->timestamps(); // Kolom created_at dan updated_at
            
            // Menambahkan constraint foreign key
            $table->foreign('username')->references('username')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codes');
    }
};
