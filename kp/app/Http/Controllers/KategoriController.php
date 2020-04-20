<?php

namespace App\Http\Controllers;

use App\Model\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function createKategori(Request $request)
    {
        return view('Content.Admin.MasterKategori.createKategori');
    }

    public function doCreateKategori(Request $request){
        $this->validate($request, [
            'idKategori' => 'required',
            'namaKategori' => 'required',
        ]);
        $newKategori = new kategori();
        $newKategori->id_kategori = $request->idKategori;
        $newKategori->nama_kategori=$request->namaKategori;
        
        if ($newKategori->save()) {
            return redirect()->route('viewKategori')->with('messages','Kategori berhasil ditambah');
        }
        else{
        }
    }

    public function updateKategori(Request $request)
    {
        $this->validate($request, [
            'idKategori' => 'required',
            'namaKategori' => 'required',
        ]);
        $daftarKategori = kategori::find($request->key);
        return view('Content.Admin.MasterKategori.updateKategori',
            [
                'daftarKategori' => $daftarKategori,
            ]
        );
    }

    public function doUpdateKategori(Request $request)
    {
        $newKategori = kategori::find($request->key);
        $newKategori->id_kategori = $request->idKategori;
        $newKategori->nama_kategori=$request->namaKategori;
        if ($newKategori->save()) {
            // $daftarJadwal = H_Jadwal::all();
            return redirect()->route('viewKategori')->with('messages','Kategori berhasil diubah');
        }
        else{
        }
    }

    public function doDeleteKategori(Request $request)
    {
        $newKategori = kategori::find($request->key);
        $newKategori->status_kategori = 0;
        if ($newKategori->save()) {
            // $daftarJadwal = H_Jadwal::all();
            return redirect()->route('viewKategori')->with('messages','Kategori berhasil di non-aktifkan');
        }
        else{
        }
    }

    public function undoDeleteKategori(Request $request)
    {
        $newKategori = kategori::find($request->key);
        $newKategori->status_kategori = 1;
        if ($newKategori->save()) {
            // $daftarJadwal = H_Jadwal::all();
            return redirect()->route('viewKategori')->with('messages','Kategori berhasil di aktifkan');
        }
        else{
        }
    }
}
