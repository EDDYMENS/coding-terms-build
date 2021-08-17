<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function term()
    {
        return view('term');
    }
}
