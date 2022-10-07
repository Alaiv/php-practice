<?php


function decode($str)
{
    $arr = mb_str_split($str);
    $i = 0;
    return array_reduce($arr, function($acc, $val) use (&$i){
        if ($val === '|') {
            $i = 1;
        } else {
            $acc .= $i;
            $i = 0;
        }

        return $acc;
    }, '');
}

print_r(decode('_|¯|____|¯|__|¯¯¯'));