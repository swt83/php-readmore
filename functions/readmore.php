<?php

function readmore($string, $limit, $readmore = '...') {
    $words = array();
    $words = explode(' ', $string, $limit);

    if (count($words) == 101) {
       $words[100] = $readmore;
    }

    return implode(' ', $words);
}