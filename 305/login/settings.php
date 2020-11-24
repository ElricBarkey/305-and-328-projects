<?php
    //Turn on error reporting -- this is critical!
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require 'check-login.php';
    include 'navbar.html';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Settings</title>
</head>
<body>
<div class="container">
<h2>Settings</h2>

    <form method="post">
        <label>Navbar color</label>
        <br>
            <?php
            $color  = array("Blue", "Grey", "Purple");

                for($i = 0; $i < sizeof($color); $i++ )
                {
                    echo '<input  type="Radio" name= "color" value="'.$color[$i].' ">' . " ".$color[$i].'</input>';
                    echo '<br>';

                }

            ?>
        <button type="submit">Submit</button>

    </form>

    <?php
    if (!empty($_POST["color"]))
    {
        $colorchoice = $_POST["color"];
        $_SESSION["mycolors"] = $colorchoice;
    }
    require 'header.php';
    ?>
</div>
    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
