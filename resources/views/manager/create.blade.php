@extends('master.manager')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Halaman Create</h4>
        <form action="{{ route('manager.store') }}" method="POST"  class="forms-sample">
          @csrf

          <div class="form-group">
            <label>Nama Menu</label>
            <input type="text" class="form-control" name="nama_menu">
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi">
          </div>
          <div class="form-group">
            <label>Ketersediaan</label>
            <input type="number" class="form-control" name="ketersediaan">
          </div>
          <button type="submit" class="btn btn-primary me-2">Kirim</button>
        </form>
      </div>
    </div>
  </div>
@endsection