<?php
    /*
     * Elric Barkey
     * 4/17/2020
     * http://ebarkey.greenriverdev.com/328/pp2/index.php
     * Pair program 2
     */

    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>

<?php

    echo "PHP Array Practice";
    echo "<br>";

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    include "functions.php";

    printArr($numbers);

    echo "<br>";
    echo "Largest number";
    echo "<br>";
    echo largest($numbers);

    echo "<br>";
    echo "<br>";
    echo "Array with no dups";
    echo "<br>";
    $noDupes = removeDups($numbers);
    printArr($noDupes);

    echo "<br>";
    echo "Distribution";
    echo "<br>";
    $disArr = distribution($numbers);
    foreach ($disArr as $num => $amount)
    {
        echo $num . " => " . $amount;
        echo "<br>";
    }

