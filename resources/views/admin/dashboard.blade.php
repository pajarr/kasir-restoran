@extends('master.admin')

@section('main')

<div class="row"> 
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Halaman Admin</h4>
        <div class="card-header-form">
          <form>
            <div class="template-demo mt-2">
              <a class="btn btn-outline-secondary btn-icon-text" href="{{ route('admin.create') }}"> Create <i class="mdi mdi-file-check btn-icon-append"></i></a>                           
            </div>
          </form>
        </div>        
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> No </th>
                <th> Nama </th>
                <th> Username </th>
                <th> Password </th>
                <th> Role </th>
                <th> Aksi </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($admin as $admins)
              <tr>
                <td> {{ ++$i }}  </td>
                <td> {{ $admins->name }} </td>
                <td> {{ $admins->username }} </td>
                <td> {{ $admins->password }} </td>
                <td> {{ $admins->role}} </td>
                <td> <form action="{{ route('admin.destroy',$admins->id) }}" method="POST">
           
                    <a class="btn btn-info" href="{{ route('admin.edit', $admins->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form> </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection