@extends('layouts.master')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Klaim</title>
</head>
<body>
    <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Periode Tagihan</th>
                  <th>Tgl.Terima</th>
                  <th>Customer</th>
                  <th>Produk</th>
                  <th>Dasar Permohonan</th>
                  <th>SID</th>
                  <th>No Order</th>
                  <th>Status Order</th>
                  <th>Status Klaim</th>
                  <th>Nilai Klaim</th>
                  <th>Hasil RAM Terakhir</th>
                  <th>Grup</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_klaim as $klaim)
                <tr>
                  <td>{{ ++$no }}</td>
                  <td>{{ $klaim->periode_tagihan }}</td>
                  <td>{{ $klaim->tgl_terima }}</td>
                  <td>{{ $klaim->customer }}</td>
                  <td>{{ $klaim->produk }}</td>
                  <td>{{ $klaim->dasar_permohonan }}</td>
                  <td>{{ $klaim->sid }}</td>
                  <td>{{ $klaim->no_order }}</td>
                  <td>{{ $klaim->status_order }}</td>
                  <td>{{ $klaim->status_klaim }}</td>
                  <td>{{ number_format($klaim->nilai_klaim, 0, ',', '.') }}</td>
                  <td>{{ $klaim->hasil_ram_terakhir }}</td>
                  <td>{{ $klaim->grup }}</td>
                  <td>                  
                </tr>
                @endforeach
              </tbody>
    </table>    
</body>
</html>
@endsection