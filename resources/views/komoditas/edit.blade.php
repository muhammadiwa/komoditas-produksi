@extends('layouts.dashboard')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Komoditas</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('komoditas.index') }}"> Back</a>
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
  
    <form action="{{ route('komoditas.update',$komodita) }}" method="POST">
        @method('put')
        @csrf
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama : </strong>
                    <input class="form-control" name="komoditas_nama" placeholder="Nama Komoditas" value="{{ $komodita->komoditas_nama }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-primary mx-1 float-right">Submit</button>
            <button type="reset" class="btn btn-outline-primary mx-1 float-right" >Reset</button>
            </div>
        </div>
   
    </form>
@endsection