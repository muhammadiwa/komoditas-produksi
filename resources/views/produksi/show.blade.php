@extends('layouts.dashboard')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Detail Produksi Komoditas</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('produksi.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal : </strong>
                {{ $produksi->tanggal }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Komoditas : </strong>
                {{ $produksi->komoditas->komoditas_nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Produksi : </strong>
                {{ $produksi->produksi }}
            </div>
        </div>
    </div>
@endsection