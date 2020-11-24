<?php
    /* Elric Barkey
        1/21/20
        305/practice/index.php
        learning php
    */

    //turn on error reporting
    ini_set('display_errors',1);
    error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Today is tuesday</h1>

    <?php
        echo "<p>hello world</p>";

        print "<br>hello world no";
    ?>

    <h2>hello no world</h2>

    <?php
        $message = "hello world";
        echo "<h3>$message</h3>";
        echo '<h3>$message</h3>';

        echo "<h3>$message</h3>"; // has to look for stuff to run
        echo '<h3>$message</h3>'; //faster for text

        $var_name = 5;
        $varName = 3;
        $VarName = 434;//dif form above
        $varName3 = 333;// can have num in name

        $varName = "abs";
        $varName = true;
        $varName = 3;

        echo'$var_name contains ' . $var_name;

        echo 5/3;
        echo "<p>" .(5/3)."</p>";

        $x = 5;
        echo $x++;
        echo "<br>";
        echo $x;

        $str = "Tom^dick^harry";
        $str = explode("^", $str);
        print_r($str);


        echo "<br>";
        echo "Let's go!";
        echo "<br>";
        print 'Let\'s go!';
        echo "<br>";
        echo "Columbus arrived on 10/12/1492";

        $veg1 = "carrot";
        echo "do you have  {$veg1}s?";

        echo strlen("elrodu");//6
        echo strlen("hi there");//8
        echo str_word_count("hi there");//2
        echo strpos("hello","lo");//3

    echo "<br>";
        $phrase = ' I like PHP ';

    echo "<br>";
        echo trim($phrase);

    echo "<br>";
        echo strlen($phrase);

    echo "<br>";
        echo strpos($phrase,'PHP');

    echo "<br>";
        echo str_replace('like', 'love',$phrase);

    echo "<br>";
        echo strtoupper($phrase);

    ?>



</body>
</html>