<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabel_pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = tabel_pembayaran::all();
        return view('gradient.form',compact(['pembayaran']));
    }

    public function store(Request $request)
    {
        tabel_pembayaran::create($request->except(['_token','submit']));
        return redirect('/pembayaran');
}
}
