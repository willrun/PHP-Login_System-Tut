<?php

    // Forces the user to login to access
    function forceLogin()
    {
        if(isset($_SESSION['user_id']))
        {
            // The user is allowed here
        }
        else
        {
            // The user is not allowed here and redirected
            header("Location: /phpLoginCourse/login.php");
            exit;
        }
    }

    function forceDashboard()
    {
        if(isset($_SESSION['user_id']))
        {
            // The user is allowed here and redirected
            header("Location: /phpLoginCourse/dashboard.php");
            exit;
        }
        else
        {
            // The user is not allowed here
        }
    }
?>