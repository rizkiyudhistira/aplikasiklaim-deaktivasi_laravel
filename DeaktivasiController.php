<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deaktivasi;

class DeaktivasiController extends Controller
{
    public function index() {
        $no = 0;
        $data_deaktivasi = Deaktivasi::all()->sortByDesc('id');
        $batas = 3;
        $jumlah_deaktivasi = Deaktivasi::count();
        $data_deaktivasi = Deaktivasi::orderBy('id', 'desc')->paginate($batas);
        return view('deaktivasi.index', compact('data_deaktivasi', 'no', 'jumlah_deaktivasi'));
    }

    public function create(){
        return view('deaktivasi.create');
    }

    public function store(){
        $table_deaktivasi = new Deaktivasi;
        $table_deaktivasi->periode_tagihan      = request('periode_tagihan');
        $table_deaktivasi->tgl_terima           = request('tgl_terima');
        $table_deaktivasi->customer             = request('customer');
        $table_deaktivasi->produk               = request('produk');
        $table_deaktivasi->dasar_permohonan     = request('dasar_permohonan');
        $table_deaktivasi->sid                  = request('sid');
        $table_deaktivasi->no_order             = request('no_order');
        $table_deaktivasi->status_order         = request('status_order');
        $table_deaktivasi->status_deaktivasi    = request('status_deaktivasi');
        $table_deaktivasi->nilai_deaktivasi     = request('nilai_deaktivasi');
        $table_deaktivasi->hasil_ram_terakhir   = request('hasil_ram_terakhir');
        $table_deaktivasi->grup                 = request('grup');
        $table_deaktivasi->save();
        return redirect('/deaktivasi');
    }

    public function edit($id){
        $table_deaktivasi = Deaktivasi::find($id);
        return view('deaktivasi.edit', compact('deaktivasi'));
    }

    public function update($id){
        $table_deaktivasi = Deaktivasi::find($id);
        $table_deaktivasi->periode_tagihan      = request('periode_tagihan');
        $table_deaktivasi->tgl_terima           = request('tgl_terima');
        $table_deaktivasi->customer             = request('customer');
        $table_deaktivasi->produk               = request('produk');
        $table_deaktivasi->dasar_permohonan     = request('dasar_permohonan');
        $table_deaktivasi->sid                  = request('sid');
        $table_deaktivasi->no_order             = request('no_order');
        $table_deaktivasi->status_order         = request('status_order');
        $table_deaktivasi->status_klaim         = request('status_klaim');
        $table_deaktivasi->nilai_klaim          = request('nilai_klaim');
        $table_deaktivasi->hasil_ram_terakhir   = request('hasil_ram_terakhir');
        $table_deaktivasi->grup                 = request('grup');
        $table_deaktivasi->save();
        return redirect('/deaktivasi');
    }

    public function destroy($id) {
        $table_deaktivasi = Deaktivasi::find($id);
        $table_deaktivasi->delete();
        return redirect('/deaktivasi');
    }

    public function search(Request $request) {
        $batas = 3;
        $cari = $request->kata;
        $data_deaktivasi = Deaktivasi::where('customer', 'like', "%".$cari."%")->paginate($batas);
        $no = $batas * ($data_deaktivasi->currentPage() - 1);
        return view('deaktivasi.search', compact('data_deaktivasi', 'no', 'cari'));
    }
}
