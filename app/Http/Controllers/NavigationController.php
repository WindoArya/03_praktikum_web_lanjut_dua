<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class NavigationController extends Controller
{
    public function products(){
        $all_artikel = Artikel::all();

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
