<?php

function dblLinear($n)
{
    $result = [1];
    $i = 0;
    $i2 = 0;
    while ($n >= count($result)) {
        $n1 = 2 * $result[$i] + 1;
        $n2 = 3 * $result[$i2] + 1;
        if ($n1 < $n2) {
            if (!in_array($n1, $result)) {
                $result[] = $n1;
            }
            $i++;
        } else {
            if (!in_array($n2, $result)) {
                $result[] = $n2;
            }
                $i2++;
        }
    }
    return $result[$n];
}

print_r(dblLinear(1000));