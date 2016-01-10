<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

class FrontController extends Controller
{
    
    public function Home()
    {
        return view('index');
    }

    public function Contacto()
    {
        return view('contact');
    }
    
    public function Review()
    {
        return view('reviews');
    }
    
    public function NotFound()
    {
        return view('404');
    }
    
    public function videos()
    {
        return view('videos');
    }
    
    public function single()
    {
        return view('single');
    }

    
}
