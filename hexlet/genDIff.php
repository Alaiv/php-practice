<?php

function genDiff($arr1, $arr2)
{
    $res = array_merge($arr1, $arr2);
    $result = [];

    foreach ($res as $i => $item) {
        if (!array_key_exists($i, $arr1)) {
            $result[$i] = 'added';
        } elseif(!array_key_exists($i, $arr2)) {
            $result[$i] = 'deleted';
        } elseif ($item !== $arr1[$i]) {
            $result[$i] = 'changed';
        } else {
            $result[$i] = 'unchanged';
        }
    }
    return $result;
}

$result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'test' => '23123'],
    ['two' => 'own', 'one' => 'one', 'three' => '213']
);

print_r($result);