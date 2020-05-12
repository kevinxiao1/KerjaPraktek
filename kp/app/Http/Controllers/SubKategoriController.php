<?php

namespace App\Http\Controllers;

use App\Model\kategori;
use App\Model\subkategori;
use Illuminate\Http\Request;

class SubKategoriController extends Controller
{
    public function createSubKategori(Request $request)
    {
        $daftarKategori = kategori::all();
        return view('Content.Admin.MasterSubKategori.createSubKategori',[
            'daftarKategori' => $daftarKategori,
        ]);
    }

    public function doCreateSubKategori(Request $request){
        $this->validate($request, [
            'idSubKategori' => 'required',
            'namaSubKategori' => 'required',
        ]);
        $newSubKategori = new subkategori();
        $newSubKategori->id_kategori = $request->kategori;
        $newSubKategori->id_subkategori = $request->idSubKategori;
        $newSubKategori->nama_subkategori=$request->namaSubKategori;
        
        if ($newSubKategori->save()) {
            return redirect()->route('viewSubKategori')->with('messages','SubKategori berhasil ditambah');
        }
        else{
        }
    }

    public function updateSubKategori(Request $request)
    {
        $daftarKategori = kategori::all();
        $daftarSubKategori = subkategori::find($request->key);
        return view('Content.Admin.MasterSubKategori.updateSubKategori',
            [
                'daftarSubKategori' => $daftarSubKategori,
                'daftarKategori' => $daftarKategori,
            ]
        );
    }

    public function doUpdateSubKategori(Request $request)
    {
        $this->validate($request, [
            'idSubKategori' => 'required',
            'namaSubKategori' => 'required',
        ]);
        $newSubKategori = subkategori::find($request->key);
        $newSubKategori->id_kategori = $request->kategori;
        $newSubKategori->id_subkategori = $request->idSubKategori;
        $newSubKategori->nama_subkategori=$request->namaSubKategori;
        if ($newSubKategori->save()) {
            // $daftarJadwal = H_Jadwal::all();
            return redirect()->route('viewSubKategori')->with('messages','SubKategori berhasil diubah');
        }
        else{
        }
    }

    public function doDeleteSubKategori(Request $request)
    {
        $newSubKategori = subkategori::find($request->key);
        $newSubKategori->status_subkategori = 0;
        if ($newSubKategori->save()) {
            // $daftarJadwal = H_Jadwal::all();
            return redirect()->route('viewSubKategori')->with('messages','Kategori berhasil di non-aktifkan');
        }
        else{
        }
    }

    public function undoDeleteSubKategori(Request $request)
    {
        $newSubKategori = subkategori::find($request->key);
        $newSubKategori->status_subkategori = 1;
        if ($newSubKategori->save()) {
            // $daftarJadwal = H_Jadwal::all();
            return redirect()->route('viewSubKategori')->with('messages','Kategori berhasil di non-aktifkan');
        }
        else{
        }
    }
}
