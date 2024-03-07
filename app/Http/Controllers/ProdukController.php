<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('admins.produk.produks', compact('produk'));
    }

    public function create()
    {
        $produk = Produk::all();
        return view('admins.produk.produks-create', compact('produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produkID' => 'required',
            'namaProduk' => 'required',
            'harga' => 'required',
            'stock' => 'required',
        ]);

        Produk::create([
            'produkID' => $request->produkID,
            'namaProduk' => $request->namaProduk,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);
        return redirect()->route('admins.produk.produks');

    }

    public function edit($id)
    {
        $data = Produk::find($id);
        $produk = Produk::all();
        return view('admins.produk.produks-edit', compact('data', 'produk'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'produkID' => 'required',
            'namaProduk' => 'required',
            'harga' => 'required',
            'stock' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['produkID'] = $request->produkID;
        $data['namaProduk'] = $request->namaProduk;
        $data['harga'] = $request->harga;
        $data['stock'] = $request->stock;

        Produk::whereId($id)->update($data);

        return redirect()->route('admins.produk.produks');
    }

    public function destroy($id)
    {
        $data = Produk::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('admins.produk.produks');
    }
}
