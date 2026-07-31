<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    use HasFactory;
    use HasFactory;
 protected $fillable = [
 'nama_perusahaan', 'bidang_usaha', 'alamat',
 'nama_pembimbing_industri', 'telepon',
 ];
}
// app/Models/Siswa.php
class Siswa extends Model
{
 use HasFactory;
 protected $fillable = [
 'nis', 'nama', 'kelas', 'tanggal_mulai_pkl',
 'tanggal_selesai_pkl', 'perusahaan_id',
 ];
}
