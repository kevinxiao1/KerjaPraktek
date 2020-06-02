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
        $daftarBarang = barang::select()->where('status_barang','=',1)->get();
        return view('Content.SiteContent.Site',
        [
            'daftarBarang' => $daftarBarang,
        ]);
    }
    public function Products(Request $request)
    {
        // $daftarBarang = barang::all();
        $daftarBarang = DB::table('barang')->where('status_barang','=',1)->paginate(9);
        $daftarKategori = kategori::all();
        $daftarSubKategori = subkategori::all();
        $kategoriTerpilih = "";
        $subKategoriTerpilih = "";
        $search="";
        $jumlahBarang = DB::table('barang')->count();
        return view('Content.SiteContent.Katalog.viewKatalog',
        [
            'daftarBarang' => $daftarBarang,
            'daftarKategori' => $daftarKategori,
            'daftarSubKategori' => $daftarSubKategori,
            'kategoriTerpilih' => $kategoriTerpilih,
            'subKategoriTerpilih' => $subKategoriTerpilih,
            'jumlahBarang' => $jumlahBarang,
            'search' => $search,
        ]);
    }
    public function ProductsSearch(Request $request)
    {
        $daftarBarang = DB::table('barang')
        ->where('nama_barang', 'LIKE', "%{$request->search}%") 
        ->where('status_barang','=',1)
        // ->orWhere('id_kategori', 'LIKE', "%{$request->search}%") 
        // ->orWhere('id_subkategori', 'LIKE', "%{$request->search}%") 
        // ->orWhere('deskripsi_barang', 'LIKE', "%{$request->search}%") 
        ->paginate(9);
        $jumlahBarang = DB::table('barang')
        ->where('nama_barang', 'LIKE', "%{$request->search}%") 
        ->where('status_barang','=',1)
        // ->orWhere('id_kategori', 'LIKE', "%{$request->search}%") 
        // ->orWhere('id_subkategori', 'LIKE', "%{$request->search}%") 
        // ->orWhere('deskripsi_barang', 'LIKE', "%{$request->search}%") 
        ->count();
        $daftarBarang->appends(['search' => $request->search]);
        $daftarKategori = kategori::all();
        $daftarSubKategori = subkategori::all();
        $kategoriTerpilih = "";
        $subKategoriTerpilih = "";
        $search = $request->search;
        // $jumlahBarang = DB::table('barang')->count();
        return view('Content.SiteContent.Katalog.viewKatalog',
        [
            'daftarBarang' => $daftarBarang,
            'daftarKategori' => $daftarKategori,
            'daftarSubKategori' => $daftarSubKategori,
            'kategoriTerpilih' => $kategoriTerpilih,
            'subKategoriTerpilih' => $subKategoriTerpilih,
            'jumlahBarang' => $jumlahBarang,
            'search' => $search,
        ]);
    }
    public function ProductsKategori(Request $request, $kategori)
    {
        $daftarBarang = DB::table('barang')->where('id_kategori',$kategori)->where('status_barang','=',1)->paginate(9);
        $daftarKategori = kategori::all();
        $daftarSubKategori = subkategori::select()->where('id_kategori','=',$kategori)->get();
        // dd($daftarSubKategori);
        $jumlahBarang = DB::table('barang')->where('id_kategori',$kategori)->where('status_barang','=',1)->count();
        // $sub = kategori::find($kategori);
        $kategoriTerpilih = $kategori;
        $subKategoriTerpilih = $daftarSubKategori;
        $search = "";
        return view('Content.SiteContent.Katalog.viewKatalog',
        [
            'daftarBarang' => $daftarBarang,
            'daftarKategori' => $daftarKategori,
            'daftarSubKategori' => $daftarSubKategori,
            'kategoriTerpilih' => $kategoriTerpilih,
            'subKategoriTerpilih' => $subKategoriTerpilih,
            'jumlahBarang' => $jumlahBarang,
            'search' => $search,
        ]);
    }

    public function ProductsSubKategori(Request $request, $subkategori)
    {
        $daftarBarang = DB::table('barang')->where('id_subkategori',$subkategori)->where('status_barang','=',1)->paginate(9);
        $daftarKategori = kategori::all();
        $daftarSubKategori = subkategori::all();
        $kategori = subkategori::find($subkategori);
        // dd($kategori['id_kategori']);
        $kategoriTerpilih = $kategori['id_kategori'];
        $subKategoriTerpilih = $subkategori;
        $jumlahBarang = DB::table('barang')->where('id_subkategori',$subkategori)->where('status_barang','=',1)->count();
        $search = "";
        // $jumlahBarang = DB::table('barang')->count();
        return view('Content.SiteContent.Katalog.viewKatalog',
        [
            'daftarBarang' => $daftarBarang,
            'daftarKategori' => $daftarKategori,
            'daftarSubKategori' => $daftarSubKategori,
            'subKategoriTerpilih' => $subKategoriTerpilih,
            'kategoriTerpilih' => $kategoriTerpilih,
            'jumlahBarang' => $jumlahBarang,
            'search' => $search,
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
