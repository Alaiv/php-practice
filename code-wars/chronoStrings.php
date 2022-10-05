<?php

function inArray($array1, $array2) {
    $result = [];
    foreach ($array1 as $item1) {
        $counting = 0;
        foreach ($array2 as $item2) {
            $counting = substr_count($item2, $item1);
            if ($counting === 1) {
                $result[] = $item1;
                break;
            }
        }
    }
    sort($result);
    return $result;
}

$a1 = ["arp", "live", "strong"];

$a2 = ["lively", "alive", "harp", "sharp", "armstrong"];

print_r(inArray($a1, $a2));