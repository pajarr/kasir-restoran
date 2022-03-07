<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laporan</title>
    <style>
        body{
            padding: 10px;
            margin: 20px;
        }
    </style>
  </head>
  <body>
<div class="table-responsive">
    <table  id="table" class="table table-dark">
        <h4 class="card-title">Laporan Pengunjung</h4>
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
    <br>
    <a class="btn btn-outline-secondary btn-fw ms-auto" href="{{ route('laporan.index') }}">Kembali</a>
  </div>
  <script>
    window.print();
</script>
</body>
</html>