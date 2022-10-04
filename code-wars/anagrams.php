<?php


function anagrams($str, $arr): array
{
    if (empty($arr)) {
        return [];
    }

    //$chars = count_chars($str, 1);
    $a1 = str_split($str);
    sort($a1);
    $result = [];

    foreach ($arr as $item) {
        $word = str_split($item);
        sort($word);
        if ($word === $a1) {
            $result[] = $item;
        }
    }

    return $result;
}

print_r(anagrams('aewqeqw', ['a', 'b', 'c', 'd']));



