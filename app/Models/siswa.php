<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'tanggal_mulai_pkl',
        'tanggal_selesai_pkl',
        'perusahaan_id',
    ];

    // Opsional: Relasi ke Perusahaan (1 siswa milik 1 perusahaan)
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }
}