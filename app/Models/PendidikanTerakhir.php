<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanTerakhir extends Model
{
    use HasFactory;

    protected $table = 'pendidikan_terakhir';

    protected $primaryKey = 'ID_Pendidikan';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Pendidikan',
        'Tingkatan_Pendidikan',
        'Nama_Sekolah',
        'Tahun_Lulus_Sekolah',
        'Pendidikan_Non_Formal',
        'Tahun_Lulus',
        'ID_Calon_Santri',
    ];

    public function CalonSantri()
    {
        return $this->belongsTo(CalonSantri::class, 'ID_Calon_Santri');
    }

    public $timestamps = false;
}
