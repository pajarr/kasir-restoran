@extends('master.manager')

@section('main')



<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Halaman Laporan</h4>
        <div class="template-demo mt-2">
            <label class="col col-form-label">Filter: </label>
            <form action="{{ url('laporan') }}" method="GET">
                <input type="date" name="keyword"> <button class="btn btn-inverse-dark btn-fw" type="submit">Cari</button>

            </form>
        </div>
        <div class="template-demo ms-auto">
            <a href="/cetak" class="btn btn-outline-secondary btn-fw ms-auto">Cetak PDF</a>
        </div>

        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> No </th>
                <th> Nama Pelanggan </th>
                <th> Menu </th>
                <th> Jumlah </th>
                <th> Total  </th>
                <th> Nama Pegawai </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($kasirs as $kasir)
              <tr>
                <td> {{ ++$i }}  </td>
                <td> {{ $kasir->nama_pelanggan }} </td>
                <td> {{ $kasir->nama_menu }} </td>
                <td> {{ $kasir->jumlah }} </td>
                <td>Rp.{{ $kasir->total_harga}} </td>
                <td> {{ $kasir->nama_pegawai }} </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
@endsection