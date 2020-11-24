<?php
    $myemail = "elric@gmail.com";
    $mypassword = "12345";

    if (isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == $myemail and $password == $mypassword)
        {
            if (isset($_POST['remember']))
            {
                setcookie('email', $email, time()+60*60*7);
                setcookie('password', $password, time()+60*60*7);
            }
            session_start();
            $_SESSION['email'] = $email;
            header("location: welcome.php");
        }
        else
        {
            echo "Email or password is invalid. <br> 
                click here to <a href='login.php'>try again</a>";
        }
    }
    else
    {
        header("location: login.php");
    }