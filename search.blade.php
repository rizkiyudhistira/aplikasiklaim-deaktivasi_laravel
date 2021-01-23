@extends('layouts.master')

@section('content')

    @if(count($data_deaktivasi))
    <div class="container">
        <div>Ditemukan {{ count($data_deaktivasi) }} data dengan kata:
        {{ $cari }}
        </div>
        @if(Session::has('pesan'))
            <div>{{ Session::get('pesan') }}</div>
        @endif
        <div class="area">
        <div class="kiri"><h4>Data Deaktivasi</h4></div>
        <div class="kanan"><a href="{{ route('deaktivasi.create') }}" class="btn btn-primary">Tambah Deaktivasi</a>
        <form action="{{ route('deaktivasi.search') }}" method="get">
            @csrf
              <input type="text" name="kata" placeholder="Cari ......">
            </form>
        </div>
    </div>
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
                  <th>Status Deaktivasi</th>
                  <th>Nilai Deaktivasi</th>
                  <th>Hasil RAM Terakhir</th>
                  <th>Grup</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_deaktivasi as $deaktivasi)
                <tr>
                  <td>{{ ++$no }}</td>
                  <td>{{ $deaktivasi->periode_tagihan }}</td>
                  <td>{{ $deaktivasi->tgl_terima }}</td>
                  <td>{{ $deaktivasi->customer }}</td>
                  <td>{{ $deaktivasi->produk }}</td>
                  <td>{{ $deaktivasi->dasar_permohonan }}</td>
                  <td>{{ $deaktivasi->sid }}</td>
                  <td>{{ $deaktivasi->no_order }}</td>
                  <td>{{ $deaktivasi->status_order }}</td>
                  <td>{{ $deaktivasi->status_deaktivasi }}</td>
                  <td>{{ number_format($deaktivasi->nilai_deaktivasi, 0, ',', '.') }}</td>
                  <td>{{ $deaktivasi->hasil_ram_terakhir }}</td>
                  <td>{{ $deaktivasi->grup }}</td>
                  <td>
                  <form action="{{ route('deaktivasi.destroy', $deaktivasi->id) }}" method="post">@csrf
                  <a href="{{ route('deaktivasi.edit', $deaktivasi->id) }}" class="btn btn-info">Edit</a>
                  <button type="submit" class="btn btn-danger" onClick="return confirm('Yakin mau dihapus?')">Hapus</button></td>
                  </form>
                </tr>
                @endforeach
              </tbody>
        </table>
        <div>Jumlah Deaktivasi: {{ $data_deaktivasi }}</div>
        <div>{{ $data_deaktivasi->links() }}</div>
        @else
            <div><h4>Data {{ $cari }} tidak ditemukan</h4>
            <a href="/deaktivasi">Kembali</a></div>
        @endif
    </div>
@endsection