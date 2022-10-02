<?php
function comp($a1, $a2) {

    if ($a1 === null || $a2 === null) {
        return false;
    }

    $arr1 = [];
    $arr2 = [];

    for ($i = 0; $i < count($a1); $i++) {
        if (!in_array($a1[$i] ** 2, $a2)
            || !in_array(sqrt($a2[$i]), $a1))
        {
            return false;
        }
        $arr1[] = $a1[$i] ** 2;
        $arr2[] = $a2[$i];
    }
    return (array_sum($arr1) - array_sum($arr2)) === 0;
}

$a1 = [121, 144, 19, 161, 19, 144, 19, 11];
$a2 = [11*11, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];

print_r(comp($a1, $a2));