<?php

//Task1

function weekDays($a)
{
    $weekDay = [
        '1' => 'Monday',
        '2' => 'Tuesday',
        '3' => 'Wednesday',
        '4' => 'Thursday',
        '5' => 'Friday',
        '6' => 'Saturday',
        '7' => 'Sunday'
    ];

    return $weekDay[$a];
}

echo weekDays(5);

echo '<br>';

//Task2

$str = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Praesent scelerisque, ante ut tincidunt feugiat, metus augue tincidunt libero, 
in aliquam augue lectus vitae nibh.';

function cutString ($b) {
    $c = str_word_count($b);
    if ($c >= 10) {
        echo mb_strimwidth($b, 0, 100, '...');
    } else {
        echo mb_strimwidth($b, 0, 50, '...');
    }
}
cutString($str);

echo '<br>';

//Task3

function wordsReverse ($d){
    $fd = implode(' ', array_reverse(explode(' ', $d)));
    echo $fd;
}

wordsReverse($str);

echo '<br>';

//Task4

$avgArray = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

function avgMath ($f) {
    $s = 0;
    for ($i = 0; $i < count($f); $i++) {
        $s += $f[$i];
    }
    echo $s / count($f);
}

avgMath(@$avgArray);

echo '<br>';

//Task5

function numRand ($z){
    for ($i=0; $i<=$z; $i++){
        $arrRand[$i] = rand(0,20);
    }
    var_dump($arrRand);
}
numRand(5);