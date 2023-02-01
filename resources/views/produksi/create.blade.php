@extends('layouts.dashboard')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Form Produksi Komoditas</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('produksi.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('produksi.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="mb-2">
                <strong>Tanggal : </strong>
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Produksi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="mb-2">
                <strong>Komoditas : </strong>
                <select name="komoditas_kode" class="form-control">
                    @foreach($komoditas as $komodita)
                        <option value="{{ $komodita->komoditas_kode }}">{{ $komodita->komoditas_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="mb-2">
                <strong>Jumlah : </strong>
                <input class="form-control" name="produksi" placeholder="Jumlah Produksi"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-primary mx-1 float-right">Submit</button>
            <button type="reset" class="btn btn-outline-primary mx-1 float-right" >Reset</button>
        </div>
    </div>
   
</form>
@endsection