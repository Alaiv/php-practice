<?php

function isMerge($s, $part1, $part2) {
    $txt = str_split($part1);
    $txt2 = str_split($part2);
    $arr = str_split($s);

    while (count($arr) > 0) {
        $len1 = 0;
        $len2 = 0;

        for ($i = 0; $i < count($txt); $i++) {
            if ($arr[$i] === $txt[$i]) {
                $len1++;
            } else {
                break;
            }
        }

        for ($j = 0; $j < count($txt2); $j++) {
            if ($arr[$j] === $txt2[$j]) {
                $len2++;
            } else {
                break;
            }
        }

        if ($len1 === 0 && $len2 === 0) {
            return false;
        }

        if ($len1 > $len2) {
            $txt = array_splice($txt, 1);
        } else {
            $txt2 = array_splice($txt2, 1);
        }
        $arr = array_splice($arr, 1);
    }
    return count_chars($s) === count_chars($part1 . $part2);
}


print_r(isMerge('codewars', 'coed', 'wars'));
