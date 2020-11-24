<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";

// create a flag to track validation
$isValid = true;

$name = "";
$flavors = array();

//checks for a name
if (!empty($_POST['name'])) {
    $name = trim($_POST['name']);
} else {
    echo "<h1>Name is required.</h1>";
    $isValid = false;
}

//checks for if a cupcake option is selected and if it was spoofed
if (isset($_POST['cupcakes']) && sizeof($_POST['cupcakes']) >= 1)
{
    //checks if valid
    if (validF($_POST['cupcakes']))
    {
        $flavors = $_POST['cupcakes'];
        $flavorString = implode(", ", $flavors);
    }

    //spoofed
    else
    {
        die ("<p>NO HACKING</p>");
    }

}
else
{
    echo "<h1>Must select one option</h1>";
    $isValid = false;
}

//validates flavor values
function validF($selectedFlavors)
{
    $validFlavors = array("The Grasshopper", "Whiskey Maple Bacon", "Carrot Walnut", "Salted Caramel Cupcake", "Red Velvet", "Lemon Drop","Tiramisu");
    foreach($selectedFlavors as $flavor) {
        if (!in_array($flavor, $validFlavors)) {
            return false;
        }
    }
    return true;
}

if ($isValid === true)
{
    $cost = 0;

    foreach ($flavors as $selected)
    {
        $cost = $cost + 3.50;
    }

    echo "<h3>Thank you, " . $name . ", for your order!<br>";
    echo "Order Summary: <br>";
    echo "<ul>";
    foreach ($flavors as $myflavor)
    {
        echo "<li>$myflavor</li>";
    }
    echo "</ul>";
    echo "<br>";

    echo "Order Total: " . "$" . number_format($cost, 2)."</h3>";
}