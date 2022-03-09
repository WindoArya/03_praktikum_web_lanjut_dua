<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('page.Content.main')
        ->with('title', 'Shop Around');
    }
}
