<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function lpg_station(){
        return view('pages.lpg_station');
    }
    public function conversion_stations(){
        return view('pages.conversion_stations');
    }
    public function conversion_kits(){
        return view('pages.conversion_kits');
    }
    public function contact(){
        return view('pages.contact');
    }
}
