<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaPenerimaan extends Model
{
    use HasFactory;

    protected $table = 'biaya_penerimaan';

    protected $primaryKey = 'ID_Biaya_Penerimaan';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Biaya_Penerimaan',
        'ID_Calon_Santri',
        'Jenis_Pembayaran',
        'Biaya',
        'Deskripsi'
    ];

    public $timestamps = false;
}
