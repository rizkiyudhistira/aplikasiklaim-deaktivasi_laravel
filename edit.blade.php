@extends('layouts.master')

@section('content')
  <div class="container">
    <h4>Edit Deaktivasi</h4>
    <form method="post" action="{{ route('deaktivasi.update', $table_deaktivasi->id) }}">
      @csrf
      <div class="form-group row">
        <label for="periode_tagihan" class="col-sm-2 col-form-label">Periode Tagihan</label>
        <div class="col-sm-10">
          <input type="text" id="periode_tagihan" name="periode_tagihan" class="form-control" placeholder="yyyy/mm" value="{{$table_deaktivasi->periode_tagihan}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="tgl_terima" class="col-sm-2 col-form-label">Tgl Terima</label>
        <div class="col-sm-10">
          <input type="text" id="tgl_terima" name="tgl_terima" class="form-control" placeholder="yyyy/mm/dd" value="{{$table_deaktivasi->tgl_terima}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="customer" class="col-sm-2 col-form-label">Customer</label>
        <div class="col-sm-10">
          <input type="text" id="customer" name="customer" class="form-control" value="{{$table_deaktivasi->customer}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="produk" class="col-sm-2 col-form-label">Produk</label>
        <div class="col-sm-10">
          <input type="text" id="produk" name="produk" class="form-control" value="{{$table_deaktivasi->produk}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="dasar_permohonan" class="col-sm-2 col-form-label">Dasar Permohonan</label>
        <div class="col-sm-10">
          <input type="text" id="dasar_permohonan" name="dasar_permohonan" class="form-control" value="{{$table_deaktivasi->dasar_permohonan}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="sid" class="col-sm-2 col-form-label">SID</label>
        <div class="col-sm-10">
          <input type="text" id="sid" name="sid" class="form-control" value="{{$table_deaktivasi->sid}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="no_order" class="col-sm-2 col-form-label">No Order</label>
        <div class="col-sm-10">
          <input type="text" id="no_order" name="no_order" class="form-control" value="{{$table_deaktivasi->no_order}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="status_order" class="col-sm-2 col-form-label">Status Order</label>
        <div class="col-sm-10">
          <input type="text" id="status_order" name="status_order" class="form-control" value="{{$table_deaktivasi->status_order}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="status_klaim" class="col-sm-2 col-form-label">Status Deaktivasi</label>
        <div class="col-sm-10">
          <input type="text" id="status_deaktivasi" name="status_deaktivasi" class="form-control" value="{{$table_deaktivasi->status_deaktivasi}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_klaim" class="col-sm-2 col-form-label">Nilai Deaktivasi (Rp)</label>
        <div class="col-sm-10">
          <input type="text" id="nilai_deaktivasi" name="nilai_deaktivasi" class="form-control" value="{{$table_deaktivasi->nilai_deaktivasi}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="hasil_ram_terakhir" class="col-sm-2 col-form-label">Hasil RAM Terakhir</label>
        <div class="col-sm-10">
          <input type="text" id="hasil_ram_terakhir" name="hasil_ram_terakhir" class="form-control" value="{{$table_deaktivasi->hasil_ram_terakhir}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="grup" class="col-sm-2 col-form-label">Grup</label>
        <div class="col-sm-10">
          <input type="text" id="grup" name="grup" class="form-control" value="{{$table_deaktivasi->grup}}">
        </div>
      </div>
      
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">Update</button>
          <a href="/deaktivasi" class="btn btn-warning">Batal</a>
        </div>
      </div>
    </form>
  </div>
@endsection