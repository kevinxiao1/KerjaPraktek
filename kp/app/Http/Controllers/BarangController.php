<?php

namespace App\Http\Controllers;

use App\Model\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function insertBarang(Request $request)
    {
        # code...
    }

    public function doInsertBarang(Request $request)
    {
        # code...
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
