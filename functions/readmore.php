<?php

function readmore($string, $limit, $readmore = '...') {
    $words = array();
    $words = explode(' ', $string, $limit);

    if (count($words) == $limit) {
       $words[$limit - 1] = $readmore;
    }
    
    return implode(' ', $words);
}