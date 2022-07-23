<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaMedis extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tenaga_medis';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_tenaga_medis',
        'nama_tenaga_medis',
        'profesi_tenaga_medis',
        'id_layanan_kesehatan'
    ];

    public function layanan_kesehatan()
    {
        return $this->belongsTo(LayananKesehatan::class, 'id_layanan_kesehatan', 'id_layanan_kesehatan');
    }
}
