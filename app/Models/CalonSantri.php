<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonSantri extends Model
{
    use HasFactory;

    protected $table = 'calon_santri';

    protected $primaryKey = 'ID_Calon_Santri';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Calon_Santri',
        'Nama',
        'Tempat_Tanggal_Lahir',
        'Jenis_Kelamin',
        'Alamat_Rumah',
        'No_Telepon',
        'ID_Pendaftaran',
    ];

    public function Pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'ID_Pendaftaran');
    }

    public $timestamps = false;
}
