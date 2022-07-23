<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kecamatan';
    public $timestamps = false;

    protected $fillable = [
        'nama_kecamatan'
    ];
}
