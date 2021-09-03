<?php

if(!function_exists('linkToPost')) {
    function linkToPost($title, $altTitle=null) {
        $titleToPost = strtolower(str_replace(' ', '-', $title));
        $altTitleToPost = strtolower(str_replace(' ', '-', $altTitle));
        $postList = array_slice(scandir('../resources/views/markdown'), 2);
        $isTitle = in_array($titleToPost.'.md', $postList);
        if( $isTitle || in_array($altTitleToPost.'.md', $postList)) {
            $titleToPost = ($isTitle)? $titleToPost : $altTitleToPost;
            return '['.$title.'](/term/'.$titleToPost.')';
        }
        return $title;
    }
}

if(!function_exists('undefinedLinks')) {
    function undefinedLinks() {
       return [];
    }
}