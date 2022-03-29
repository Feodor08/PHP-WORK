<?php
    header('Content-Type: text/html; charset+utf-8');
    $str1 = file_get_contents('1.txt');
    $str2 = file_get_contents('2.txt');

    $arr1 = explode(' ', $str1);
    $arr2 = explode(' ', $str2);

    $sum = array_sum($arr1) + array_sum($arr2);
    file_put_contents('sum.txt', $sum);
?>
