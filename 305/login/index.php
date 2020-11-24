<?php
/**
 *  File 305/login
 *  Author Elric B and John Laygo
 *  Date 3/2/2020
 *  Description uses radio buttons to alter color of nav bar and other css items that affect every page
 */


//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);



//If not logged in

require 'check-login.php';
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
    include 'navbar.html';
?>

<body>

<div class="container">


    <h1>Admin Page</h1>
    <p>This page contains super-sensitive data</p>
    </div>

    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    </body>


</html>
