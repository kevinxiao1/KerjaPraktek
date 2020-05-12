<?php

namespace App\Http\Controllers;

use App\Model\barang;
use App\Model\kategori;
use App\Model\subkategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class siteController extends Controller
{
    //
    public function Home(Request $request)
    {
        $daftarBarang = barang::all();
        return view('Content.SiteContent.Site',
        [
            'daftarBarang' => $daftarBarang,
        ]);
    }
    public function Products(Request $request)
    {
        // $daftarBarang = barang::all();
        $daftarBarang = DB::table('barang')->paginate(6);
        $daftarKategori = kategori::all();
        $daftarSubKategori = subkategori::all();
        $kategoriTerpilih = "";
        $subKategoriTerpilih = "";
        // $jumlahBarang = DB::table('barang')->count();
        return view('Content.SiteContent.Katalog.viewKatalog',
        [
            'daftarBarang' => $daftarBarang,
            'daftarKategori' => $daftarKategori,
            'daftarSubKategori' => $daftarSubKategori,
            'kategoriTerpilih' => $kategoriTerpilih,
            'subKategoriTerpilih' => $subKategoriTerpilih,
            // 'jumlahBarang' => $jumlahBarang,
        ]);
    }
    public function ProductsSearch(Request $request)
    {
        $daftarBarang = DB::table('barang')
        ->where('nama_barang', 'LIKE', "%{$request->search}%") 
        ->orWhere('id_kategori', 'LIKE', "%{$request->search}%") 
        ->orWhere('id_subkategori', 'LIKE', "%{$request->search}%") 
        ->orWhere('deskripsi_barang', 'LIKE', "%{$request->search}%") 
        ->paginate(6);
        $daftarKategori = kategori::all();
        $daftarSubKategori = subkategori::all();
        // $jumlahBarang = DB::table('barang')->count();
        return view('Content.SiteContent.Katalog.viewKatalog',
        [
            'daftarBarang' => $daftarBarang,
            'daftarKategori' => $daftarKategori,
            'daftarSubKategori' => $daftarSubKategori,
            // 'jumlahBarang' => $jumlahBarang,
        ]);
    }
    public function ProductsKategori(Request $request, $kategori)
    {
        $daftarBarang = DB::table('barang')->where('id_kategori',$kategori)->paginate(6);
        $daftarKategori = kategori::all();
        $daftarSubKategori = subkategori::select()->where('id_kategori','=',$kategori)->get();
        // dd($daftarSubKategori);
        // $jumlahBarang = DB::table('barang')->count();
        // $sub = kategori::find($kategori);
        $kategoriTerpilih = $kategori;
        $subKategoriTerpilih = "";
        return view('Content.SiteContent.Katalog.viewKatalog',
        [
            'daftarBarang' => $daftarBarang,
            'daftarKategori' => $daftarKategori,
            'daftarSubKategori' => $daftarSubKategori,
            'kategoriTerpilih' => $kategoriTerpilih,
            'subKategoriTerpilih' => $subKategoriTerpilih,
            // 'jumlahBarang' => $jumlahBarang,
        ]);
    }

    public function ProductsSubKategori(Request $request, $subkategori)
    {
        $daftarBarang = DB::table('barang')->where('id_subkategori',$subkategori)->paginate(6);
        $daftarKategori = kategori::all();
        $daftarSubKategori = subkategori::all();
        $kategori = subkategori::find($subkategori);
        // dd($kategori['id_kategori']);
        $kategoriTerpilih = $kategori['id_kategori'];
        $subKategoriTerpilih = $subkategori;
        // $jumlahBarang = DB::table('barang')->count();
        return view('Content.SiteContent.Katalog.viewKatalog',
        [
            'daftarBarang' => $daftarBarang,
            'daftarKategori' => $daftarKategori,
            'daftarSubKategori' => $daftarSubKategori,
            'subKategoriTerpilih' => $subKategoriTerpilih,
            'kategoriTerpilih' => $kategoriTerpilih,
            // 'jumlahBarang' => $jumlahBarang,
        ]);
    }
    public function ProductsDetail(Request $request, $id)
    {
        $daftarBarang = barang::find($id);
        return view('Content.SiteContent.Katalog.viewDetailBarang',
        [
            'daftarBarang' => $daftarBarang,
        ]);
    }
    public function Login()
    {
        return view('Content.SiteContent.Login');
    }

    public function doLogin(Request $request)
    {
        if ($request->username =="admin" && $request->password =="admin") {
            Session::put("username",$request->username); 
            return  redirect('/admin/dashboard');
        }
        else{
            return  redirect('/login');
        }
    }
}
