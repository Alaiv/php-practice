<?php


function uniqueInOrder($num)
{
    $arr = $num;
    if (!is_array($arr)) {
        $arr = str_split($num);
    }
    $result = [$arr[0]];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] !== $arr[$i - 1]) {
            $result[] = $arr[$i];
        }
    }

    return $result;
}

print_r(uniqueInOrder("AAAABBBCCDAABBB"));