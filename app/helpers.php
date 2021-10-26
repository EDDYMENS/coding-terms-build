<?php

if(!function_exists('undefinedLinks') && isset($_SERVER['argv'][1]) && $_SERVER['argv'][1] == 'tinker') {
    function undefinedLinks() {
       $termList = [];
       $postList = array_slice(scandir('resources/views/markdown'), 2);
       Session::put('postList', $postList);
       if(!function_exists('linkToPost')) {
           function linkToPost($title, $altTitle=null) {
               $postList = Session::get('postList');
               $formattedTitle = str_replace(' ', '-', strtolower($title));
               $formattedAltTitle = str_replace(' ', '-', strtolower($altTitle));
               if(!in_array($formattedTitle.'.md', $postList) && !in_array($formattedAltTitle.'.md', $postList)) {
                   $markdownFIleName = Session::get('current-parsed-markdown');
                   Session::push('unlinkedList', [$formattedTitle, $formattedAltTitle, $markdownFIleName]);
                }
                return $title;
            }
        }
       foreach($postList as $post) {
           Session::put('current-parsed-markdown', $post);
           Str::markdown(view('markdown.'.str_replace('.md', '', $post))->with(compact('termList'))->render());
           Session::forget('current-parsed-markdown');
        }
       dump(Session::get('unlinkedList'));
       Session::forget('unlinkedList');
    }
}

if(!function_exists('linkToPost') && !function_exists('undefinedLinks')) {
    function linkToPost($title, $altTitle=null) {
        $isMarkDown = false;
        if(isset($_SERVER['argv'][1]) && $_SERVER['argv'][1] == "markdown:generate") {
            $isMarkDown = true;
        }
        $titleToPost = strtolower(str_replace(' ', '-', $title));
        $altTitleToPost = strtolower(str_replace(' ', '-', $altTitle));
        $postList = array_slice(scandir(base_path().'/resources/views/markdown'), 2);
        $isTitle = in_array($titleToPost.'.md', $postList);
        if( $isTitle || in_array($altTitleToPost.'.md', $postList)) {
            $titleToPost = ($isTitle)? $titleToPost : $altTitleToPost;
            return ($isMarkDown)?
                '['.$title.']('.$titleToPost.'.md)'
                 :'['.$title.'](/term/'.$titleToPost.')';
        }
        return $title;
    }
}