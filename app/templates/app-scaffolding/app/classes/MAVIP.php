<?php

class MAVIP {

    function isLoggedIn($test=false)
    {
        if ($test) return true;

        if (!empty($_SESSION['UserID']))
            return true;
        else
            return false;
    }

    function requireLogin()
    {
        if (!self::isLoggedIn()) {
            $referrer = $_SERVER['REQUEST_URI'];
            header("location: /login/index?r=$referrer");
            exit;
        }
    }

    function playerFullName()
    {
        if (self::isLoggedIn())
            return $_SESSION['UserFName'] . ' ' . $_SESSION['UserLName'];
        else
            return null;
    }

    function playerFirstName()
    {
        if (self::isLoggedIn())
            return $_SESSION['UserFName'];
        else
            return null;
    }

    function playerLastName()
    {
        if (self::isLoggedIn())
            return $_SESSION['UserLName'];
        else
            return null;
    }

}