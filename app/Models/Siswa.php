<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $primarykey = 'id';
    protected $fillable = 
    ['nama_siswa',
    'angkatan',
    'kelas',
    'nisn',
    'TempatTanggalLahir',
    'gender','
    Agama',
    'id_portofolio',
    'created_at',
    'updated_at'];
    protected $guarded = [];
}
