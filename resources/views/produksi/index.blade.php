@extends('layouts.dashboard')

@section('content')
    <div class="row my-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Daftar Produksi</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('produksi.create') }}"> Tambah Produksi Baru</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Komoditas</th>
                <th>Produksi (kg)</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($produksis as $produksi)
        <tr>
            <td>{{ date('d-m-Y',strtotime($produksi->tanggal)) }}</td>
            <td>{{ $produksi->komoditas->komoditas_nama }}</td>
            <td>{{ $produksi->produksi }}</td>
            <td>
                <form action="{{ route('produksi.destroy',$produksi) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('produksi.show',$produksi) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('produksi.edit',$produksi) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
      
@endsection

@section('scripts')
<script>
    $('.table').DataTable();
</script>

@endsection