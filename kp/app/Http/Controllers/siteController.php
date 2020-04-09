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
}
