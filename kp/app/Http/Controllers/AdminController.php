<?php

namespace App\Http\Controllers;

use App\Model\barang;
use App\Model\kategori;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function Dashboard(Request $request){
        return view('Content.Admin.Dashboard.ContentDashboard');
    }
    public function viewBarang(Request $request)
    {
        $daftarBarang = barang::all();
        return view('Content.Admin.MasterBarang.viewBarang',
            [
                'daftarBarang' => $daftarBarang,
            ]
        );
    }
    public function viewKategori(Request $request)
    {
        $daftarKategori = kategori::all();
        return view('Content.Admin.MasterKategori.viewKategori',
            [
                'daftarKategori' => $daftarKategori,
            ]
        );
    }
}
