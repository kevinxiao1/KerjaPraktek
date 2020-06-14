<?php

namespace App\Http\Controllers;

use App\Model\konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    //
    public function createKonten(Request $request)
    {
        $daftarKategori = konten::all();
        return view('Content.Admin.MasterKonten.createKonten',[
            'daftarKategori' => $daftarKategori,
        ]);
    }

    public function doCreateKonten(Request $request){
        $this->validate($request, [
            'isiKonten' => 'required',
        ]);
        $newKonten = new konten();
        $newKonten->isi_konten = $request->isiKonten;
        
        if ($newKonten->save()) {
            return redirect()->route('viewKonten')->with('messages','Konten berhasil ditambah');
        }
        else{
        }
    }

    public function updateKonten(Request $request)
    {
        $daftarKonten = konten::find($request->key);
        return view('Content.Admin.MasterKonten.updateKonten',
            [
                'daftarKonten' => $daftarKonten
            ]
        );
    }

    public function doUpdateKonten(Request $request)
    {
        $this->validate($request, [
            'isiKonten' => 'required'
        ]);
        $newKonten = konten::find($request->key);
        $newKonten->isi_konten = $request->isiKonten;
        if ($newKonten->save()) {
            return redirect()->route('viewKonten')->with('messages','Konten berhasil diubah');
        }
        else{
        }
    }

    public function doDeleteKonten(Request $request)
    {
        $newKonten = konten::find($request->key);
        $newKonten->status_konten = 0;
        if ($newKonten->save()) {
            // $daftarJadwal = H_Jadwal::all();
            return redirect()->route('viewKonten')->with('messages','Konten berhasil di non-aktifkan');
        }
        else{
        }
    }

    public function undoDeleteKonten(Request $request)
    {
        $newKonten = konten::find($request->key);
        $newKonten->status_konten = 1;
        if ($newKonten->save()) {
            // $daftarJadwal = H_Jadwal::all();
            return redirect()->route('viewKonten')->with('messages','Konten berhasil di non-aktifkan');
        }
        else{
        }
    }
}
