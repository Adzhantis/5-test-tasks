<?php
/**
 *
1. �������� ������� �� php ������� ����� ���������� ������ � �������� �������.
a. ������ ������������ ���������� ������ php ��� �����
b. ������ ������������ ������ ���������� ��� ����� ������ (������� �� �� ����������)
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
