<?php
if(isset($_COOKIE["fruit"]))
{
    echo "Your favorite fruit is " . $_COOKIE["fruit"];
}
else
{
    echo "I dunno your favorite fruit.";
}