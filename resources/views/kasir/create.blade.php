@extends('master.dashboard')

@section('main')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Halaman Create</h4>
        <form action="{{ route('kasir.store') }}" method="POST"  class="forms-sample">
          @csrf

          <div class="form-group">
            <label>Nama Pelanggan</label>
            <input type="text" class="form-control" name="nama_pelanggan">
          </div>
          <div class="form-group">
            <label>Nama Menu</label>
            <input type="text" class="form-control" name="nama_menu">
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="jumlah">
          </div>
          <div class="form-group">
            <label>Total Harga</label>
            <input type="text" class="form-control" name="total_harga">
          </div>
          <div class="form-group">
            <label>Nama Pegawai</label>
            <input type="text" class="form-control" name="nama_pegawai">
          </div>
          <button type="submit" class="btn btn-primary me-2">Kirim</button>
        </form>
      </div>
    </div>
  </div>
@endsection