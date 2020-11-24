<?php
    session_start();
    session_destroy();
    if (isset($_COOKIE['email']) and isset($_COOKIE['password'])) {
        $email = $_COOKIE['email'];
        $password = $_COOKIE['password'];
        setcookie('email', $email, time() - 1);
        setcookie('password', $password, time() - 1);
    }
    echo "You logged out successfully. click here to login
            <a href='login.php'>login again</a>";