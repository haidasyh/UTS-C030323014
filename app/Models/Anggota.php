<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $fillable = [
        'nama', 
        'alamat', 
        'telepon',
        // Tambahkan atribut lain jika diperlukan
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
