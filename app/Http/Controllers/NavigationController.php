<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function products(){
        return view('page.header.navigation.products')
        ->with('title', 'Products');
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
