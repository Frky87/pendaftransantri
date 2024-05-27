<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaPondok extends Model
{
    use HasFactory;

    protected $table = 'biaya_pondok';

    protected $primaryKey = 'ID_Biaya_Pondok';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Biaya_Pondok',
        'ID_Santri',
        'Nama_Biaya',
        'Jenis_Biaya',
        'Deskripsi',
        'Total_Biaya',
        'Tanggal_Berlaku',
    ];

    public $timestamps = false;
}
