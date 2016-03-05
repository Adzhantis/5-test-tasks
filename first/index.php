<?php
/**
 *
1. Написать функцию на php которая будет возвращать строку в обратном порядке.
a. нельзя использовать встроенную функию php для этого
b. нельзя использовать другую переменную для новой строки (вернуть ту же переменную)
 */

$string = 'abcdef';

function str_reverse(&$string){

    $array = str_split($string);

    $string = '';

    for($a = count($array); $a >= 0; $a--)
    {
        $string .= $array[$a];
    }

}

echo $string . '<hr>';

str_reverse($string);

echo $string;
