<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santri';

    protected $primaryKey = 'ID_Santri';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Santri',
        'ID_Calon_Santri',
        'Nama',
        'Tanggal_Diterima',
        'ID_Kelas',
    ];

    public $timestamps = false;
}
