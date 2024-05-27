<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilUjian extends Model
{
    use HasFactory;

    protected $table = 'hasil_ujian';

    protected $primaryKey = 'ID_Hasil_Ujian';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Hasil_Ujian',
        'ID_Pelaksanaan_Ujian',
        'ID_Calon_Santri',
        'Jumlah_Soal',
        'Waktu_Selesai',
        'Nilai_Akhir',
    ];

    public $timestamps = false;
}
