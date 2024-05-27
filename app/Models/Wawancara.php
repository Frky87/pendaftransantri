<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wawancara extends Model
{
    use HasFactory;

    protected $table = 'wawancara';

    protected $primaryKey = 'ID_Wawancara';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Wawancara',
        'ID_Calon_Santri',
        'Tanggal_Wawancara',
        'Mulai_Wawancara',
        'Pewawancara',
        'Nilai_Wawancara'
    ];

    public $timestamps = false;
}
