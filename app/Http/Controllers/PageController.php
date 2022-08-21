<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.home');
    }

    public function about()
    {
        return view('dashboard.about');
    }

    public function contact()
    {
        return view('dashboard.contact');
    }

    public function products()
    {
        return view('dashboard.products');
    }
}
