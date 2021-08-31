<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MainController extends Controller
{
    private $allTerms = 'all_terms';
    public function term(Request $request, $term=null)
    {
        $term = ($term)? $term : $this->allTerms;
        $termList = ($term != $this->allTerms)? [] : $this->getTermList();
        extract($this->prepareTitles($term));
        try {
            $definition = Str::markdown(view('markdown.'.$title)->with(compact('termList'))->render());
        } catch(\Exception $e) {
            dd($e);
            $definition = Str::markdown('<center style="font-size:50px" class="mt-5"> Nothing Found</center>');
        }
        return view('term')->with(compact('definition', 'formattedTitle', 'termList', 'term'));
    }

    private function prepareTitles($term)
    {
        $title = Str::of($term)->slug();
        $formattedTitle = str_replace('-', ' ', Str::of($title));
        return ['title' => $title, 'formattedTitle' =>  $formattedTitle];
    }

    private function getTermList()
    {
        $termList = array_slice(scandir('../resources/views/markdown'), 2);
        $titleList = [];
        foreach($termList as $term) {
            $termWithoutMD = str_replace('.md', '', $term);
            $formattedTitle = $this->prepareTitles($termWithoutMD)['formattedTitle'];
            $titleList[] = $formattedTitle;
        }
        $allKey = array_search($this->allTerms, $titleList);
        unset($titleList[$allKey]);
        sort($titleList);
        return $titleList;
    }
}
