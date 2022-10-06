<?php

const NUMERALS = [
    "M" => 1000,
    "CM" => 900,
    "D" => 500,
    "CD" => 400,
    "C" => 100,
    "XC" => 90,
    "L" => 50,
    "XL" => 40,
    "X" => 10,
    "IX" => 9,
    "V" => 5,
    "IV" => 4,
    "I" => 1,
];

function toRoman($str)
{
    $result = '';
    $count = $str;

    foreach (NUMERALS as $i => $val) {
        while ($count >= $val) {
            $result .= $i;
            $count -= $val;
        }
    }
    return $result;
}

function toNumeric($str)
{
    $arr = str_split($str);
    $i = 0;
    $check = '';

    while (!empty($arr)) {
        $ar = implode('', $arr);
        if (array_key_exists($ar, NUMERALS)) {
            $i += NUMERALS[$ar];
            $check .= $ar;
            $arr = str_split(substr($str, strlen($check)));
        } else {
            array_pop($arr);
        }
    }
    return toRoman($i) === $str ? $i : false;
}

print_r(toRoman1(90));