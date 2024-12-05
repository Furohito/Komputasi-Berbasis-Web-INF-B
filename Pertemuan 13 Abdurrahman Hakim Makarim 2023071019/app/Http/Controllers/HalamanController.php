<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class HalamanController extends Controller
{
    public function home()
    {
        return view('home_p13');
    }
    public function about()
    {
        return view('about_p13');
    }
    public function contact()
    {
        return view('contact_p13');
    }
}
