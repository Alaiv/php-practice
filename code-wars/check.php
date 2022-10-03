<?php

function narcissistic(int $value): bool
{
    $val = strval($value);
    $count = 0;
    $i = 0;

    while ($i < strlen($val)) {
        $count += (int)$val[$i] ** strlen($val);
        $i++;
    }

    return $count === $value;
}

print_r(narcissistic(371));