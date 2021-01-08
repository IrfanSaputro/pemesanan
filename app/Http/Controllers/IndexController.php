<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pemesan;

class IndexController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view ('user.index',compact('produk'));
    }

    // public function show(Produk $produk)
    // {
    //     return view('user.pesan',compact('produk'));
    // }

    public function show($id_produk){
        $produk = Produk::find($id_produk);
        return view('user.pesan', compact('produk'));

    }

    public function store(Request $request){
        $request->validate([
            'nama_pemesan' => 'required',
            'alamat_pemesan' => 'required',
            'telepon_pemesan' => 'required',
            'produk_pemesan' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        $pemesan = new Pemesan;
        $pemesan->nama_pemesan = $request->nama_pemesan;
        $pemesan->alamat_pemesan = $request->alamat_pemesan;
        $pemesan->telepon_pemesan = $request->telepon_pemesan;
        $pemesan->produk_pemesan = $request->produk_pemesan;
        $pemesan->deskripsi = $request->deskripsi;
        $pemesan->harga = $request->harga;

        $pemesan->save();

        return redirect()->route('index.index')
                        ->with('success','Pesanan berhasil');
    }


}
