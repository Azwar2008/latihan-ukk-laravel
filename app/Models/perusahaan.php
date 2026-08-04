<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perusahaan',
        'bidang_usaha',
        'alamat',
        'nama_pembimbing_industri',
        'telepon',
    ];

    // Opsional: Relasi ke Siswa (1 perusahaan punya banyak siswa)
    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
}