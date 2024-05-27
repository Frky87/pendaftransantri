<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliSantri extends Model
{
    use HasFactory;

    protected $table = 'wali_santri';

    protected $primaryKey = 'ID_Wali';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'ID_Wali',
        'Nama_Wali',
        'Hubungan_Wali',
        'Alamat_Wali',
        'No_Telepon_Wali',
        'Email_Wali',
        'ID_Calon_Santri',
    ];

    public function CalonSantri()
    {
        return $this->belongsTo(CalonSantri::class, 'ID_Calon_Santri');
    }

    public $timestamps = false;
}
