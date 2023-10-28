<?php

if(!function_exists('truncateText')){

    function truncateText($text, $flag=1, $length =20, $suffix ="..." ){

        if(strlen($text) <= $length || $flag == 1){
            return $text;
        }

        return substr($text, 0, $length ) . $suffix;
    }
}
