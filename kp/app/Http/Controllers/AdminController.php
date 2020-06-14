<?php

namespace App\Http\Controllers;

use App\Model\barang;
use App\Model\kategori;
use App\Model\konten;
use App\Model\subkategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;     


class AdminController extends Controller
{
    //
    public function Dashboard(Request $request){
        if (Session::has("username")) {
            return view('Content.Admin.Dashboard.ContentDashboard');
        }
    }
    public function viewBarang(Request $request)
    {
        // dd(public_path());
        if (Session::has("username")) {
            $daftarBarang = barang::all();
            return view('Content.Admin.MasterBarang.viewBarang',
                [
                    'daftarBarang' => $daftarBarang,
                ]
            );
        }
        
    }
    public function viewKategori(Request $request)
    {
        if (Session::has("username")) {
            $daftarKategori = kategori::all();
            return view('Content.Admin.MasterKategori.viewKategori',
                [
                    'daftarKategori' => $daftarKategori,
                ]
            );
        }
        
    }

    public function viewSubKategori(Request $request)
    {
        if (Session::has("username")) {
            $daftarSubKategori = subkategori::all();
            return view('Content.Admin.MasterSubKategori.viewSubKategori',
                [
                    'daftarSubKategori' => $daftarSubKategori,
                ]
            );
        }
        
    }

    public function viewKonten(Request $request)
    {
        if (Session::has("username")) {
            $daftarKonten = konten::all();
            return view('Content.Admin.MasterKonten.viewKonten',
                [
                    'daftarKonten' => $daftarKonten,
                ]
            );
        }
        
    }

    public function Logout()
    {
        Session::forget('username');
        return redirect('/loginSSD');
    }
}
