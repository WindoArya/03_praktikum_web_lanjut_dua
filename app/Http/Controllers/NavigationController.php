<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\DB;

class NavigationController extends Controller
{
    public function products(Request $request){
        $keyword = $request->post('keyword');
        $kategori = $request->post('kategori');
        DB::enableQueryLog();
        $all_artikel = Artikel::whereNotNull('nama');
        if(!empty($keyword)){
            $all_artikel->where('nama', '=', $keyword);
        }
        if(!empty($kategori)){
            $all_artikel->where('ketegori', '=', $kategori);
        }
        $all_artikel = $all_artikel->get();
        //dd(DB::getQueryLog());

        return view('page.header.navigation.products')
            ->with('title', 'Products')
            ->with('artikel', $all_artikel);
    }

    public function news(){
        return view('page.header.navigation.news')
            ->with('title', 'News');
    }

    public function aboutus(){
        return view('page.header.navigation.about-us')
            ->with('title', 'About Us');
    }

    public function contactus(){
        return view('page.header.navigation.contact-us')
            ->with('title', 'Contact Us');
    }
}
