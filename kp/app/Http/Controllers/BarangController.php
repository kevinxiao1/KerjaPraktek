<?php

namespace App\Http\Controllers;

use App\Model\barang;
use App\Model\kategori;
use App\Model\subkategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function createBarang(Request $request)
    {
        $daftarKategori = kategori::all();
        $daftarSubKategori = subkategori::all();
        return view('Content.Admin.MasterBarang.createBarang',
        [
            'daftarKategori' => $daftarKategori,
            'daftarSubKategori' => $daftarSubKategori,
        ]);
    }

    public function doCreateBarang(Request $request)
    {
        $this->validate($request, [
            'idBarang' => 'required',
            'namaBarang' => 'required',
            'hargaBarang' => 'required',
            'deskripsiBarang' => 'required',
        ]);
        // $request->file('gambarBarang')->store('Gambar');
        $request->gambarBarang->storeAs('Gambar/'.$request->idBarang, $request->gambarBarang->getClientOriginalName());
        $barang = new barang();
        $barang->id_barang = $request->idBarang;
        $barang->nama_barang = $request->namaBarang;
        $barang->harga_barang = $request->hargaBarang;
        $barang->deskripsi_barang = $request->deskripsiBarang;
        $barang->gambar_barang = $request->gambarBarang->getClientOriginalName();
        $barang->id_kategori = $request->kategori;
        $barang->id_subkategori = $request->subKategori;
        if ($barang->save()) {
            return redirect()->route('viewBarang')->with('messages','Kategori berhasil ditambah');
        }
        else{
        }
        
    }

    public function deleteBarang(Request $request)
    {
        $barang = barang::find($request->key);
        // dd($barang);
        $barang->status_barang = 0;
        $barang->save();
        return redirect()->route('viewBarang')->with('messages','Barang berhasil di non-aktifkan');
    }

    public function unDeleteBarang(Request $request)
    {
        $barang = barang::find($request->key);
        // dd($barang);
        $barang->status_barang = 1;
        $barang->save();
        return redirect()->route('viewBarang')->with('messages','Barang berhasil di non-aktifkan');
    }

    public function updateBarang(Request $request)
    {
        # code...
    }
    public function douUpdateBarang(Request $request)
    {
        
    }
}
