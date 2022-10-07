<?php


function find($integers)
{
    $odd = [];
    $even = [];

    foreach ($integers as $num) {
        $num % 2 === 0 ? $even[] = $num : $odd[] = $num;
    }
    return count($odd) === 1 ? $odd[0] : $even[0];
}

print_r(find([2, 4, 0, 100, 4, 11, 2602, 36]));