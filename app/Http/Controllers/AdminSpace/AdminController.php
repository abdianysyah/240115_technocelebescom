<?php

namespace App\Http\Controllers\AdminSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('panel.dashboard');
    }
    public function testimoni()
    {
        return ('panel.testimoni_form');
    }
    public function portofolio()
    {
        return view('panel.portofolio_form');
    }
}
