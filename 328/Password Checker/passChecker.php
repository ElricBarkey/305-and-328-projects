<?php

    //turn on error reporting
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    const MIN_PASS = 6;

    $passwords = array("abc", "123456@", "elro", "chic#ken");

    function isValidPassword($password)
    {
        if (strlen($password) >= MIN_PASS and preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password))
        {
            return "true";
        }
        else
        {
            return "false";
        }
    }

    $updatedPasswords = array();
    for ($i = 0; $i < sizeof($passwords); $i++)
    {
        $updatedPasswords[$passwords[$i]] = isValidPassword($passwords[$i]);
    }


    foreach ($updatedPasswords as $item => $value)
    {
        echo $item . " ";
        echo $value;
        echo "<br>";
    }