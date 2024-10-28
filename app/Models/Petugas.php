<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';
    protected $fillable = [
        'nama_petugas', 
        'email', 
        'telepon',
        // Tambahkan atribut lain jika diperlukan
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
