@extends('master.admin')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Halaman Create</h4>
        <form action="{{ route('admin.store') }}" method="POST"  class="forms-sample">
          @csrf

          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <label>Role</label>
            <select class="js-example-basic-single" name="role" style="width:100%">
                <option value="manager" name="manager">Manager</option>
                <option value="kasir" name="kasir">Kasir</option>
                <option value="admin" name="admin">Admin</option>
              </select>
          </div>
          <button type="submit" class="btn btn-primary me-2">Kirim</button>
        </form>
      </div>
    </div>
  </div>
@endsection