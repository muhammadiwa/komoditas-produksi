<?php

namespace App\Http\Controllers;
use App\Models\Produksi;
use App\Models\Komodita;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $komoditas = Komodita::all();
        $year = request('year') ?? '2023';
        return view('laporan.index',compact('komoditas','year'));
    }
}
