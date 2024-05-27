<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Barryvdh\DomPDF\Facade\Pdf;

class PelaksanaanUjian extends Model
{
    
    use HasFactory;

    protected $table = 'pelaksanaan_ujians';

    protected $primaryKey = 'ID_Pelaksanaan_Ujian';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Pelaksanaan_Ujian',
        'Tanggal_Ujian',
        'Jenis_Ujian',
        'Waktu_Mulai',
        'Durasi_Ujian',
        'Nilai_Minimum'
    ];

    public function exportpdf(){
        $data = PelaksanaanUjian::all();
        $PDF = PDF::loadView('Administrator/Admins/reportAdmin', array('data' => $data));
        return $PDF->stream('data-admin.pdf');
    }

    public $timestamps = false;
}


