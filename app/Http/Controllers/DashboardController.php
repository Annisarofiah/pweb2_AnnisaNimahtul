<?php

namespace App\Http\Controllers;
use App\Models\tabel_pembayaran;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function tampil()
    {
        $tabel_pembayaran = tabel_pembayaran::all();
        // return view('gradient.index',compact('tabel_pembayaran'));
        return view('gradient.index', compact('tabel_pembayaran'));
    }

    public function tampilbayar()
    {
        return view('gradient.tambah');
    }

    public function insertbayar(Request $request)
   {
        $data = $request->all();
        $bayar = new tabel_pembayaran();
        $bayar->nama = $data['nama'];
        $bayar->kelas = $data['kelas'];
        $bayar->jumlah_bayar = $data['jumlah_bayar'];
        $bayar->bulan = $data['bulan'];
        // dd($masuk);
        $bayar->save();
        return redirect()->route('dashboard');

   }
   public function delete(string $id_bayar)
    {
        tabel_pembayaran::where('id_bayar',$id_bayar)->delete();
        return redirect()->to('dashboard')->with('success');
    }


    
}