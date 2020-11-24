<?php
    //header("Location:result.php");
    //turn on error reporting
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    //used to test webpage
    echo "hello";

    $name = 'elric';
    $age = 21;

    const TAX_RATE = 0.08;

    echo "<p>$name <br> $age</p>";

    $a = 5;
    $b = 2;
    //needs to print correctly
    echo "sum " . ($a + $b);
    echo "<br>";
    echo "difference " . ($a - $b);
    echo "<br>";
    echo "quotient " . ($a / $b);
    echo "<br>";
    echo "product " . ($a * $b);
    echo "<br>";
    echo "remainder " . ($a % $b);
    echo "<br>";

    /* if ($a > $b)
    {
        echo "a is greater";
        echo "<br>";
    }
*/

/*  if ($a > $b)
 {
     echo $a;
     echo "<br>";
 }
 else if ($a < $b)
 {
     echo $b;
     echo "<br>";
 }
*/
/*
     echo ($a > $b ? $a : $b);

    echo "<br>";
    $n = "3-Summer";
        switch ($n) {
            case "1-Fall":
                echo "fall";
                break;

            case "2-Winter":
                echo "winter";
                break;

            case "3-Summer":
                echo "summer";
                break;

            default:
                echo "error";;
        }
*/
/*
    if($a != $b && $b <= 10 )
    {
        echo "YES";
        echo "<br>";
    }

    for ($i = 10; $i >= 1; $i--)
    {
        echo $i;
        echo "<br>";
    }
    echo "Blast off";
*/
/*    $i = 10;
    while ($i >= 0)
    {
        echo $i;
        echo "<br>";
        $i--;
    }
    echo "Blast off!";
*/

    $names = array("Elro", "Duke", "Alex");
    var_dump($names);

    $names[] = "kuku";

    foreach ($names as $name)
    {
        echo $name;
        echo "<br>";
    }

    for ($i = 0; $i <= sizeof($names); $i++)
{
    echo $i;
    echo "<br>";
}


    $items['pen'] = ".20";
    $items['marker'] = "6.20";
    $items['eraser'] = ".50";

    var_dump($items);

    $items['candy'] = "667";

    echo "<br>";

    foreach ($items as $item => $value)
    {
        echo $item . " ";
        echo $value;
        echo "<br>";
    }

    include "header.html";

    function hello()
    {
        echo "hello";
    }

    hello();

    function insect ($bug)
    {
        echo $bug;
    }
    echo "<br>";

    insect("bee");

    function combine($first, $last)
    {
        echo "<br>";
        return $first. " " . $last;
    }
    echo combine("elro","duke");