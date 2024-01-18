<?php

namespace App\Http\Controllers\HomeSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }
    public function about()
    {
        return view('home.tentang');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function service()
    {
        return view('home.service');
    }
    public function profile()
    {
        return view('home.profile');
    }
    public function visi_misi()
    {
        return view('home.visi&misi');
    }
}