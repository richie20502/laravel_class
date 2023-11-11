<?php

if(!function_exists('truncateText')){
    function truncateText($text, $length = 20, $suffix = "...."){
        if(strlen($text) <= $length){
            return $text;
        }

        return substr($text,0, $length).$suffix;

    }
}

