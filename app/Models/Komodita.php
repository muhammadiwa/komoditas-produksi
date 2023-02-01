<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komodita extends Model
{
    use HasFactory;
    protected $fillable = [
        'komoditas_kode',
        'komoditas_nama'
    ];

    protected $primaryKey = 'komoditas_kode';

    public $incrementing = false;

    public static function generateKode()
    {
        $count = Komodita::count() + 1;
        return 'K'.sprintf('%03d',$count);
    }

    public function getProduksi($komoditas_kode,$month,$year)
    {
        return Produksi::where('komoditas_kode',$komoditas_kode)->whereMonth('tanggal',$month)->whereYear('tanggal',$year)->sum('produksi');
    }
}
