<?php
if (!empty($_POST['fruit']))
{
    //make persistent
    setcookie("fruit", $_POST['fruit'], time()+60 *60 *24);

}
//redirect
header("Location: showFruit.php");
