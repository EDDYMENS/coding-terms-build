<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MainController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function term(Request $request, $term)
    {
        $title = Str::of($term)->slug()->lower();
        $definition = Str::markdown(view('markdown.'.$title)->render());
        return view('term')->with(compact('definition'));
    }
}
