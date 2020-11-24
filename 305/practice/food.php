<?php
    //turn on error reporting
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $greeting = "heeeeello";

    function hello($name = "")
    {
        global $greeting;
        $message = "<p>$greeting";

        if($name != "")
        {
            $message .= ", $name";
        }
        $message .= "!</p>";
        echo $message;
    }

    hello("joey");
    hello();

    function crazy($num)
    {
        if ($num < 0)
        {
            return false;
        }
        else if ($num < 10)
        {
            return $num;
        }
        else
        {
            return  "CRazy";
        }
    }

        $val1 = crazy(-5);
        $val2 = crazy(3);
        $val3 = crazy(-454);

        echo "$val1,  $val2, $val3";

        //define a constant
        define("TAX_RATE",.10);
        $total = 57.09 * TAX_RATE;

        $day =1;
        switch ($day)
        {
            case 1:
                print "Mon";
                break;
            case 2:
                print "Tues";
                break;
            default:
                print "Invalid";
        }

        for ($i = 0; $i < 5;$i++)
        {
            echo "$i<br>";
        }

        $x = 0;
        while ($x >= 5)
        {
            echo "$x<br>";
            $x++;
        }

        echo ($x == 5 ? "tacos" : "pizza");

        echo "<pre>";
        var_dump($_SERVER);
        echo "</pre>";


        //average checker
        $num = 6;
        $num2 = 8;
        function avg($num,$num2)
        {
            $math = ($num / $num2)/2;
            echo "Your avg is " . $math;
        }

        function avg2($num,$num2)
        {
            $math = ($num / $num2)/2;
            return $math;
        }

        $avgnum = avg2($num, $num2);
        echo $avgnum;

        percentage(83);
        function percentage($perc)
        {
            if ($perc >= 90)
            {
                echo "A";
            }
            else if($perc >= 80 and $perc < 90)
            {
                echo "B";
            }
            else if ($perc >= 70 and $perc < 80)
            {
                echo "C";
            }
            else if ($perc >= 60 and $perc < 70)
            {
                echo "D";
            }
            else
            {
                echo "F";
            }
        }