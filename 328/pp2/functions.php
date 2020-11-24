<?php

function printArr($myArr)
{
    foreach ($myArr as $item)
    {
        echo $item . "<br>";
    }
}

function largest($arr)
{
    return max($arr);
}

function removeDups($dupArr)
{
    return  array_unique($dupArr);
}

function distribution($assoArr)
{
    sort($assoArr);
    $assoArr = array_count_values($assoArr);
    return $assoArr;
}