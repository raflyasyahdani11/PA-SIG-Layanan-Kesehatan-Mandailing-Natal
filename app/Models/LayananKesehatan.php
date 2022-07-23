<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananKesehatan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_layanan_kesehatan';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_layanan_kesehatan',
        'nama_layanan',
        'jenis_layanan',
        'alamat',
        'jam_buka',
        'jam_tutup',
        'fasilitas',
        'id_kelurahan',
        'longitude',
        'latitude',
        'gambar_tempat',
    ];

    protected $casts = [
        'fasilitas' => 'collection',
        'longitude' => 'float',
        'latitude' => 'float',
    ];

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan', 'id_kelurahan');
    }

    public function tenaga_medis()
    {
        return $this->hasMany(TenagaMedis::class, 'id_layanan_kesehatan', 'id_layanan_kesehatan');
    }
}
