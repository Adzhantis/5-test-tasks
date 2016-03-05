<?php
/**
 * Напишите функцию на php , которая будет переводить римские числа в арабские.
 *
 */

/**
 * @param $a
 * @param $digit
 * @return mixed
 */
function template($a, $digit){
    $template = [
        1 => $a[0],
        2 => $a[0].$a[0],
        3 => $a[0].$a[0].$a[0],
        4 => $a[0].$a[1],
        5 => $a[1],
        6 => $a[1].$a[0],
        7 => $a[1].$a[0].$a[0],
        8 => $a[1].$a[0].$a[0].$a[0],
        9 => $a[0].$a[2],
    ];

    return $template[$digit];
}

/**
 * @param $rome_number
 * @return mixed|string
 */
function translate_rome_numbers($rome_number){

    $tens = ['I', 'V', 'X'];
    $hundreds = ['X', 'L', 'C'];
    $thousands = ['C', 'D', 'M'];

    $digits = [];

    for ($i=0; $i < strlen($rome_number); $i++) {
        $digits[] = substr($rome_number, $i, 1);
    }

    switch(strlen($rome_number)){
        case 1:
            return template($tens, $digits[0]);
            break;

        case 2:
            return template($hundreds, $digits[0]).
                   template($tens,     $digits[1]);
            break;

        case 3:
            return template($thousands, $digits[0]).
                   template($hundreds,  $digits[1]).
                   template($tens,      $digits[2]);
            break;

        case 4:
            return template($tens,      $digits[0]).
                   template($thousands, $digits[1]).
                   template($hundreds,  $digits[2]).
                   template($tens,      $digits[3]);
            break;

        case 5:
            return template($hundreds,  $digits[0]).
                   template($tens,      $digits[1]).
                   template($thousands, $digits[2]).
                   template($hundreds,  $digits[3]).
                   template($tens,      $digits[4]);
            break;
    }
}

echo ' Напишите функцию на php , которая будет переводить римские числа в арабские.<hr>';
echo '<form method="get">
        <input name="number">
        <input type="submit">
      </form>';


echo translate_rome_numbers($_GET['number']);