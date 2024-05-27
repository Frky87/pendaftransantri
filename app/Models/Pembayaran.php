<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $primaryKey = 'ID_Pembayaran';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Pembayaran',
        'ID_Biaya_Penerimaan',
        'ID_Biaya_Pondok',
        'Tanggal_Pembayaran',
        'Jenis_Pembayaran',
        'Status_Pembayaran',
        'Petugas_Pembayaran',
    ];

    public $timestamps = false;
}
