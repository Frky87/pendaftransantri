<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    protected $primaryKey = 'ID_Kelas';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Kelas',
        'Level_Kelas',
        'Kapasitas_Kelas'
    ];

    protected $guarded = [];
    public $timestamps = false;

}
