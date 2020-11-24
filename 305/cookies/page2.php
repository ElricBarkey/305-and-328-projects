<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2</title>
</head>
<body>
<?php
    if (isset($_COOKIE['name']))
    $name = $_COOKIE['name'];
    echo "<h2> Hello, " .$name."</h2>";

    $movie = $_COOKIE['fav'];
    echo "<h2> my fav, " .$movie."</h2>";
    ?>

</body>
</html>
