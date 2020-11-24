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

<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<pre>";
var_dump($_POST);
echo "</pre>";

//PASTE POST ARRAY DATA

require ('validation-functions.php');

//Create a flag to track validation
$isValid = true;

//Initialize all variables
$fname = "";
$lname = "";
$address = "";
$toppings = array();
$method = null;
$size = null;

//Get the form data
if (validName($_POST['firstName'])) {
    $fname = trim($_POST['firstName']);
} else {
    echo "<p>First name is required.</p>";
    $isValid = false;
}
if (validName($_POST['lastName'])) {
    $lname = trim($_POST['lastName']);
} else {
    echo "<p>Last name is required.</p>";
    $isValid = false;
}



if (validMethod($_POST['method'])) {
    $method = $_POST['method'];

} else {
    die ("<p>Go away, evildoer!</p>");
}

if ($method == "delivery") {
    if (validAddress($_POST['address'])) {
        $address = trim($_POST['address']);
    } else {
        echo "<p>Address is required and must be 10 chars long.</p>";
        $isValid = false;
    }
}

//If toppings have been selected
if (isset($_POST['toppings']) &&
    sizeof($_POST['toppings']) >= 1) {

    //If toppings are valid
    if (validToppings($_POST['toppings'])) {
        $toppings = $_POST['toppings'];
        $toppingString = implode(", ", $toppings);
    }
    //I've been spoofed!
    else {
        die ("<p>Don't hack me!</p>");
    }
}
//No toppings selected
else {
    $toppingString = "Cheese only";
}

if (validSize($_POST['size'])) {
    $size = $_POST['size'];
} else {
    echo "<p>Please select a size.</p>";
    $isValid = false;
}

if ($isValid) {

    //Display the form data
    echo "<h1>Thank you for your order, $fname!</h1>";
    echo "<h2>Order Summary</h2>";
    echo "<p>Name: $fname $lname</p>";
    echo "<p>Address: $address</p>";
    echo "<p>Pickup or Delivery: $method</p>";
    echo "<p>Toppings: $toppingString</p>";
    echo "<p>Size: $size</p>";

    //Send email
    $fromAddress = "poppa@gmail.com";
    $toAddress = "tostrander@greenriver.edu";
    $subject = "Order Confirmation";
    $headers = "From: Poppa's Pizza <$fromAddress>";
    $message = "Your order has been confirmed\r\n";
    $message .= "Name: $fname $lname\r\n";
    $message .= "Address: $address\r\n";
    //mail($toAddress, $subject, $message, $headers);
}

?>

</body>
</html>