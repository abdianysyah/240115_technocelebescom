<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Service as ServiceModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
