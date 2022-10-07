<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Funct\Collection;
use Funct\Strings;


function doubleArr($arr)
{

    $res = array_map(function($v) {
       return Collection\invoke($v, fn($s) => mb_str_split(Strings\repeat($s, 2)));
    }, $arr);
    $next = array_map(fn($v) => Collection\flattenAll($v), $res);

    return array_reduce($next, function ($acc, $val) {
        $acc[] = $val;
        $acc[] = $val;
        return $acc;
    }, []);
}
$arr3 = [
    ['@','@'],
    ['@','|'],
    ['—','|'],
    ['@','|'],
    ['@','@']
];
$arr1 = [
    ['*','*','*','*'],
    ['*',' ',' ','*'],
    ['*',' ',' ','*'],
    ['*','*','*','*']
];
print_r(doubleArr($arr3));