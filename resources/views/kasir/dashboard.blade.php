@extends('master.dashboard')

@section('main')
            <div class="row"> 
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Halaman Transaksi</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="template-demo mt-2">
                          <a class="btn btn-outline-secondary btn-icon-text" href="{{ route('kasir.create') }}"> Create <i class="mdi mdi-file-check btn-icon-append"></i></a>                           
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
                              <th> Nama Pelanggan </th>
                              <th> Menu </th>
                              <th> Jumlah </th>
                              <th> Total  </th>
                              <th> Nama Pegawai </th>
                              <th> Aksi </th>
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
                            <td> <form action="{{ route('kasir.destroy',$kasir->id) }}" method="POST">
                       
                                <a class="btn btn-info" href="{{ route('kasir.edit', $kasir->id) }}">Edit</a>
                 
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