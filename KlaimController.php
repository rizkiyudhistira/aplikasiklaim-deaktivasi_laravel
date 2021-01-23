<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Klaim;

class KlaimController extends Controller
{
    public function index() {
        $no = 0;
        $data_klaim = Klaim::all()->sortByDesc('id');
        $batas = 3;
        $jumlah_klaim = Klaim::count();
        $data_klaim = Klaim::orderBy('id', 'desc')->paginate($batas);
        return view('klaim.index', compact('data_klaim', 'no', 'jumlah_klaim'));
    }

    

    public function create() {
        return view('klaim.create');
    }

    public function store(){
        $table_klaim = new Klaim;
        $table_klaim->periode_tagihan      = request('periode_tagihan');
        $table_klaim->tgl_terima           = request('tgl_terima');
        $table_klaim->customer             = request('customer');
        $table_klaim->produk               = request('produk');
        $table_klaim->dasar_permohonan     = request('dasar_permohonan');
        $table_klaim->sid                  = request('sid');
        $table_klaim->no_order             = request('no_order');
        $table_klaim->status_order         = request('status_order');
        $table_klaim->status_klaim         = request('status_klaim');
        $table_klaim->nilai_klaim          = request('nilai_klaim');
        $table_klaim->hasil_ram_terakhir   = request('hasil_ram_terakhir');
        $table_klaim->grup                 = request('grup');
        $table_klaim->save();
        return redirect('/klaim')->with('pesan', 'Data Klaim Berhasil di Simpan');
    }

    public function edit($id){
        $table_klaim = Klaim::find($id);
        return view('klaim.edit', compact('klaim'));
    }

    public function update($id){
        $table_klaim = Klaim::find($id);
        $table_klaim->periode_tagihan      = request('periode_tagihan');
        $table_klaim->tgl_terima           = request('tgl_terima');
        $table_klaim->customer             = request('customer');
        $table_klaim->produk               = request('produk');
        $table_klaim->dasar_permohonan     = request('dasar_permohonan');
        $table_klaim->sid                  = request('sid');
        $table_klaim->no_order             = request('no_order');
        $table_klaim->status_order         = request('status_order');
        $table_klaim->status_klaim         = request('status_klaim');
        $table_klaim->nilai_klaim          = request('nilai_klaim');
        $table_klaim->hasil_ram_terakhir   = request('hasil_ram_terakhir');
        $table_klaim->grup                 = request('grup');
        $table_klaim->save();
        return redirect('/klaim')->with('pesan', 'Data Klaim Berhasil di Update');
    }

    public function destroy($id) {
        $table_klaim = Klaim::find($id);
        $table_klaim->delete();
        return redirect('/klaim')->with('pesan', 'Data Klaim Berhasil di Hapus');
    }

    public function search(Request $request) {
        $batas = 3;
        $cari = $request->kata;
        $data_klaim = Klaim::where('customer', 'like', "%".$cari."%")->paginate($batas);
        $no = $batas * ($data_klaim->currentPage() - 1);
        return view('klaim.search', compact('data_klaim', 'no', 'cari'));
    }
}
