<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view('admin.produk',compact('produk'));
    }

    public function create()
    {
        return view('admin.tambah_produk');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|same:old_nama_produk',
            'deskripsi_produk' => 'required',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga_produk' => 'required'
        ]);
 
        $get = $request->id_produk;
        $produk = new Produk;
        $produk->id_produk = $get;
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi_produk = $request->deskripsi_produk;
        $produk->gambar_produk = $request->gambar_produk;
        $produk->harga_produk = $request->harga_produk;

        if($request->hasfile('gambar_produk')){
            $filenameWithExt1 = $request->file('gambar_produk')->getClientOriginalName();
            $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);            
            $extension1 = $request->file('gambar_produk')->getClientOriginalExtension();
            $fileNameToStore1 = $filenameWithExt1;                       
            $path1 = $request->file('gambar_produk')->move('img/', $fileNameToStore1);
            $produk->gambar_produk=$fileNameToStore1;
        }

        $produk->save();

        return redirect()->route('produk.index')
                        ->with('success','Produk berhasil ditambahkan');
    }
 
    public function edit(Produk $produk)
    {
        return view('admin.edit_produk',compact('produk'));
    }
 
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga_produk' => 'required'
        ]);

        $produk->nama_produk= $request->nama_produk;
        $produk->deskripsi_produk = $request->deskripsi_produk;
        // $produk->gambar_produk = $request->gambar_produk;
        $produk->harga_produk = $request->harga_produk;

        if($request->hasfile('gambar_produk')){
            $filenameWithExt1 = $request->file('gambar_produk')->getClientOriginalName();
            $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);            
            $extension1 = $request->file('gambar_produk')->getClientOriginalExtension();
            $fileNameToStore1 = $filenameWithExt1;                       
            $path1 = $request->file('gambar_produk')->move('img/', $fileNameToStore1);
            $produk->gambar_produk = $fileNameToStore1;
        }
        
        $produk->save();

        // $produk->update($request->all());
 
        return redirect()->route('produk.index')
                        ->with('success','Produk berhasil di ubah');
    }
 
    public function destroy(Produk $produk)
    {
        $produk->delete();
 
        return redirect()->route('produk.index')
                        ->with('success','Produk berhasi dihapus');
    }
}
