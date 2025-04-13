<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        return view('theme.index');
    }
    public function service()
    {
        return view('theme.service');
    }
    public function menu()
    {
        return view('theme.menu');
    }
    public function booking()
    {
        return view('theme.booking');
    }
    public function team()
    {
        return view('theme.team');
    }
    public function testimonial()
    {
        return view('theme.testimonial');
    }
    public function contact()
    {
        return view('theme.contact');
    }
    public function about()
    {
        return view('theme.about');
    }
}
