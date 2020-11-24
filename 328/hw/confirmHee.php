<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HeeHaw Output</title>
</head>
<body>

<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Create a flag to track validation
$isValid = true;

//Initialize all variables
$input = 0;

$input = trim($_POST['number']);


if ($isValid) {

    //Display the form data
    echo("<p>");


    for( $i = 1; $i <= $input; $i++)
    {
        if (($i % 5 === 0) && ($i % 3 === 0))//5 and 3
        {
            echo("Hee Haw! ");
            echo("<br>");
        }

        else if ($i % 3 === 0)//just 3
        {
            echo("Hee! ");
            echo("<br>");
        }

        else if ($i % 5 === 0)//just 5
        {
            echo("Haw! ");
            echo("<br>");
        }

        else
        {
            echo($i);
            echo("<br>");
        }

    }

    echo("</p>");}
?>

</body>
</html>