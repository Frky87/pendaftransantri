<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';

    protected $primaryKey = 'ID_Pendaftaran';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Pendaftaran',
        'Tanggal_Pendaftaran',
        'Status_Pendaftaran'
    ];

    public $timestamps = false;
}
