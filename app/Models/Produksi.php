<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produksi extends Model
{
    use HasFactory;

    protected $table = 'produksi';
    protected $fillable = [
        'tanggal',
        'komoditas_kode',
        'produksi'
    ];

    protected $primaryKey = 'tanggal';
    public $incrementing = false;

    public function komoditas()
    {
        return $this->belongsTo(Komodita::class,'komoditas_kode');
    }
}
