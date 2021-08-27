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
        $formattedTitle = str_replace('-', ' ', Str::of($title)->title());
        try {
            $definition = Str::markdown(view('markdown.'.$title)->render());
        } catch(\Exception $e) {
            $definition = Str::markdown('<center style="font-size:50px" class="mt-5"> Nothing Found</center>');
        }
        return view('term')->with(compact('definition', 'formattedTitle'));
    }
}
