<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    //
    public function Home(Request $request)
    {
        return view('Content.SiteContent.Site');
    }
    public function Products(Request $request)
    {
        return view('Content.SiteContent.Products');
    }

    public function Login()
    {
        return view('Content.SiteContent.Login');
    }

    public function doLogin(Request $request)
    {
        if ($request->username =="admin" && $request->password =="admin") {
            return  redirect('/admin/dashboard');
        }
    }
}
