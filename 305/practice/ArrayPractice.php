
<pre>
<?php
    //var_dump($_SERVER);
    $animals = array("cat", "dog","fish");
    $animals[] = "elephant";//adds to the array
    //echo $animals[3];//elephant starts at 0

    $names = array("austin","Max","Roman","Tim","Elric");

    function printNames($arr)
    {
        foreach ($arr as $item)
        {
            echo $item."<br>";
        }
    }
    var_dump($names);
    $names[] = "dave";
    echo $names[0];
    echo $names[sizeof($names) -1];
    printNames($names);

    $nameList = implode("<br>", $names);
    echo $nameList;



    printArr($animals);

    function printArr($arr)
    {
        /*
        for ($i = 0; $i < sizeof($animals); $i++)
        {
            echo $animals[$i]."<br>";
        }
        */

        foreach ($arr as $item)
        {
            echo $item."<br>";
        }
    }

?>
</pre>