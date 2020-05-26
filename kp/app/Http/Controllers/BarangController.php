<?php

namespace App\Http\Controllers;

use App\Model\barang;
use App\Model\kategori;
use App\Model\subkategori;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Environment\Console;

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
    public function barangAjax($id)
    {
    //    Console.log("cok");
        $subkategori = subkategori::select()
                    ->where("id_kategori",$id)
                    ->pluck('id_subkategori','nama_subkategori')
                    ->toArray();
        // dd($subkategori);
        return json_encode($subkategori);
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
        // $request->gambarBarang->storeAs('Gambar/'.$request->idBarang, $request->gambarBarang->getClientOriginalName());
        // Storage::disk('public')->put($request->gambarBarang->getClientOriginalName(), $request->gambarBarang);
        // Storage::putFile('Gambar', $request->file('gambarBarang'));
        $destinationPath = public_path('/Image/');
        $file = $request->file('gambarBarang');
        // $allowedExt = ['jpg','jpeg','png'];
        $extension = $file->getClientOriginalExtension();
        // $filesize = $file->getSize();
        
        $barang = new barang();
        $barang->id_barang = $request->idBarang;
        $barang->nama_barang = $request->namaBarang;
        $barang->harga_barang = $request->hargaBarang;
        $barang->deskripsi_barang = $request->deskripsiBarang;
        $barang->gambar_barang = $request->gambarBarang->getClientOriginalName();
        $barang->id_kategori = $request->kategori;
        $barang->id_subkategori = $request->subKategori;
        if ($barang->save()) {
            $file->move($destinationPath.$request->idBarang.'/','profil.jpg');
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
        $daftarBarang = barang::find($request->key);
        $daftarKategori = kategori::all();
        $daftarSubKategori = subkategori::all();
        return view('Content.Admin.MasterBarang.updateBarang',
        [
            'daftarKategori' => $daftarKategori,
            'daftarSubKategori' => $daftarSubKategori,
            'daftarBarang' => $daftarBarang,
        ]);
    }
    public function doUpdateBarang(Request $request)
    {
        $this->validate($request, [
            'idBarang' => 'required',
            'namaBarang' => 'required',
            'hargaBarang' => 'required',
            'deskripsiBarang' => 'required',
        ]);
        // $request->file('gambarBarang')->store('Gambar');
        // $request->gambarBarang->storeAs('Gambar/'.$request->idBarang, $request->gambarBarang->getClientOriginalName());
        // Storage::disk('public')->put($request->gambarBarang->getClientOriginalName(), $request->gambarBarang);
        // Storage::putFile('Gambar', $request->file('gambarBarang'));
        $destinationPath = public_path('/Image/');
        $file = $request->file('gambarBarang');
        // $allowedExt = ['jpg','jpeg','png'];
        if ($file != null) {
            $extension = $file->getClientOriginalExtension();
        }
        
        // $filesize = $file->getSize();
        
        $barang = barang::find($request->key);
        $barang->id_barang = $request->idBarang;
        $barang->nama_barang = $request->namaBarang;
        $barang->harga_barang = $request->hargaBarang;
        $barang->deskripsi_barang = $request->deskripsiBarang;
        if ($file != null) {
            $barang->gambar_barang = $request->gambarBarang->getClientOriginalName();
        }
        $barang->id_kategori = $request->kategori;
        $barang->id_subkategori = $request->subKategori;
        if ($barang->save()) {
            if ($file != null) {
                $file->move($destinationPath.$request->idBarang.'/','profil.jpg');
            }
            return redirect()->route('viewBarang')->with('messages','Barang berhasil diganti');
        }
        else{
        }
    }
}
