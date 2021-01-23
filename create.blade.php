@extends('layouts.master')

@section('content')
  <div class="container">
    <h4>Tambah Deaktivasi</h4>
      @if (count($errors) > 0)
          <ul class="alert alert-danger">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      @endif
    <form method="post" action="{{ route('deaktivasi.store') }}">
      @csrf
      <div class="form-group row">
        <label for="periode_tagihan" class="col-sm-2 col-form-label">Periode Tagihan</label>
        <div class="col-sm-10">
          <input type="text" id="periode_tagihan" name="periode_tagihan" class="form-control" placeholder="yyyy/mm">
        </div>
      </div>
      <div class="form-group row">
        <label for="tgl_terima" class="col-sm-2 col-form-label">Tgl Terima</label>
        <div class="col-sm-10">
          <input type="text" id="tgl_terima" name="tgl_terima" class="form-control" placeholder="yyyy/mm/dd">
        </div>
      </div>
      <div class="form-group row">
        <label for="customer" class="col-sm-2 col-form-label">Customer</label>
        <div class="col-sm-10">
          <input type="text" id="customer" name="customer" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="produk" class="col-sm-2 col-form-label">Produk</label>
        <div class="col-sm-10">
          <input type="text" id="produk" name="produk" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="dasar_permohonan" class="col-sm-2 col-form-label">Dasar Permohonan</label>
        <div class="col-sm-10">
          <input type="text" id="dasar_permohonan" name="dasar_permohonan" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="sid" class="col-sm-2 col-form-label">SID</label>
        <div class="col-sm-10">
          <input type="text" id="sid" name="sid" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="no_order" class="col-sm-2 col-form-label">No Order</label>
        <div class="col-sm-10">
          <input type="text" id="no_order" name="no_order" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="status_order" class="col-sm-2 col-form-label">Status Order</label>
        <div class="col-sm-10">
          <input type="text" id="status_order" name="status_order" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="status_deaktivasi" class="col-sm-2 col-form-label">Status Deaktivasi</label>
        <div class="col-sm-10">
          <input type="text" id="status_deaktivasi" name="status_deaktivasi" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_deaktivasi" class="col-sm-2 col-form-label">Nilai Deaktivasi (Rp)</label>
        <div class="col-sm-10">
          <input type="text" id="nilai_deaktivasi" name="nilai_deaktivasi" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="hasil_ram_terakhir" class="col-sm-2 col-form-label">Hasil RAM Terakhir</label>
        <div class="col-sm-10">
          <input type="text" id="hasil_ram_terakhir" name="hasil_ram_terakhir" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="grup" class="col-sm-2 col-form-label">Grup</label>
        <div class="col-sm-10">
          <input type="text" id="grup" name="grup" class="form-control">
        </div>
      </div>
      
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="/deaktivasi" class="btn btn-warning">Batal</a>
        </div>
      </div>
    </form>
  </div>
@endsection