<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller
{
   public function index()
   {
       $produk = Produk::orderBy('created_at', 'desc')->get();
       return view('produk.index', compact('produk'));
   }

   public function store()
   {
       $attr = request()->validate([
           'nama_produk' => 'required',
           'keterangan' => 'required',
           'harga' => 'required',
           'jumlah' => 'required'
       ]);
       Produk::create($attr);
       return redirect('/');
   }

   public function edit(Produk $produk)
   {
       return view('produk.edit', compact('produk'));
   }

   public function update(Produk $produk)
   {
        $attr = request()->validate([
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);
        $produk->update($attr);
        return redirect('/');
   }

   public function delete(Produk $produk)
   {
       $produk->delete();
       return redirect('/');
   }
}
