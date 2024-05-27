<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengunduranDiri extends Model
{
    use HasFactory;

    protected $table = 'pengunduran_diri';

    protected $primaryKey = 'ID_Pengunduran_Diri';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Pengunduran_Diri',
        'ID_Santri',
        'Tanggal_Pengunduran',
        'Alasan_Pengunduran',
        'Keterangan',
        'Status_Pengunduran',
    ];

    public $timestamps = false;
}
