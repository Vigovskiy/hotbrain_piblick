<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view(view: 'home');
    }

    public function about() {
        return view(view: 'about');
    }

    public function contact() {
        return view(view: 'contact');
    }
}
