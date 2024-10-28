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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
    //        $table->foreignId('anggota_id')->constrained('anggota')->onDelete('cascade');
    //        $table->foreignId('buku_id')->constrained('buku')->onDelete('cascade');
    //        $table->foreignId('petugas_id')->constrained('petugas')->onDelete('cascade');
    //        $table->date('tanggal_pinjam');
    //        $table->date('tanggal_kembali');
    //        $table->enum('status', ['Dipinjam', 'Dikembalikan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
