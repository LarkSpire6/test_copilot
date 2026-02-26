<?php

// Sort an array of integers in ascending order
function sortIntArray(array $arr): array {
    sort($arr, SORT_NUMERIC);
    return $arr;
}

// Sort an array of strings in alphabetical order
function sortStringArray(array $arr): array {
    sort($arr, SORT_STRING);
    return $arr;
}

// Sort the characters in a string alphabetically
function sortString(string $str): string {
    $chars = str_split($str);
    sort($chars, SORT_STRING);
    return implode('', $chars);
}

// Example usage
// $ints = [5, 2, 9, 1];
// print_r(sortIntArray($ints));

// $strings = ["banana", "apple", "cherry"];
// print_r(sortStringArray($strings));

// $str = "dcba";
// echo sortString($str);