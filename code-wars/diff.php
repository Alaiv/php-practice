<?php

function arrayDiff($a1, $a2)
{
    $arr = [];

    foreach ($a1 as $item) {
        if (!in_array($item, $a2)) {
            $arr[] = $item;
        }
    }
    return $arr;
}

print_r(arrayDiff([1,2,2,2,3],[2]));
