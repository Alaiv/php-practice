<?php

function getIndex(int $key): int
{
    return crc32($key) % 1000;
}

function make(): array
{
    return [];
}

function collision(int $key, array $map): bool
{
    $keyHash = getIndex($key);
    [$k] = $map[$keyHash];
    return $k !== $key;
}

function get(array $map, int $key, $defaultValue = null)
{
    $keyHash = getIndex($key);

    if (!array_key_exists($keyHash, $map) || collision($key, $map)) {
        return $defaultValue;
    }

    [, $v] = $map[$keyHash];
    return $v;
}


function set(array &$map, int $key, $value): bool
{
    $keyHash = getIndex($key);

    if (array_key_exists($keyHash, $map) && collision($key, $map)) {
        return false;
    }

    $map[$keyHash] = [$key, $value];
    return true;
}

$arr = make();

set($arr, 'aaaaa0.462031558722291', 'vvv');
set($arr, 'aaaaa0.0585754039730588', 'boom!');


print_r(get($arr, 'aaaaa0.0585754039730588'));
