@extends('layouts.dashboard')
 
@section('content')
    <div class="row my-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Report Produksi Komoditas</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <form action="{{ route('laporan.index') }}" method="get" class="mb-2">
        <select name="year" id="year" class="form-control" onchange="submit()">
            <option {{ $year=='2017'?'selected':'' }} value="2017">2017</option>
            <option {{ $year=='2018'?'selected':'' }} value="2018">2018</option>
            <option {{ $year=='2019'?'selected':'' }} value="2019">2019</option>
            <option {{ $year=='2020'?'selected':'' }} value="2020">2020</option>
            <option {{ $year=='2021'?'selected':'' }} value="2021">2021</option>
            <option {{ $year=='2022'?'selected':'' }} value="2022">2022</option>
            <option {{ $year=='2023'?'selected':'' }} value="2023">2023</option>
            <option {{ $year=='2024'?'selected':'' }} value="2024">2024</option>
            <option {{ $year=='2025'?'selected':'' }} value="2025">2025</option>
        </select>
    </form>
   
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tahun</th>
                <th>Komoditas</th>
                <th>Januari</th>
                <th>Februari</th>
                <th>Maret</th>
                <th>April</th>
                <th>Mei</th>
                <th>Juni</th>
                <th>July</th>
                <th>Agustus</th>
                <th>September</th>
                <th>Oktober</th>
                <th>November</th>
                <th>Desember</th>
            </tr>
        </thead>
        <tbody>
            @foreach($komoditas as $komodita)
                <tr>
                    <td>{{ $year }}</td>
                    <td>{{ $komodita->komoditas_nama }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,1,$year) }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,2,$year) }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,3,$year) }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,4,$year) }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,5,$year) }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,6,$year) }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,7,$year) }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,8,$year) }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,9,$year) }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,10,$year) }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,11,$year) }}</td>
                    <td>{{ $komodita->getProduksi($komodita->komoditas_kode,12,$year) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
      
@endsection

@section('scripts')
<script>
    // $('.table').DataTable();
</script>

@endsection