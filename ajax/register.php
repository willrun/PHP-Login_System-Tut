<?php
// Allow the config
    define('__CONFIG__', true);
// Require the config    
    require_once "../inc/config.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    // Always return in json format
    {
        header('Content-Type: application/json');
        $return = [];
        // Make sure the user does not already exist
        // Make sure tha user can be added and is added
        // Return the proper information back to javascript to redirect
        // $return['name'] = 'William Griffith';
        $return['redirect'] = '/phpLoginCourse/dashboard.php?this was a redirect';
        echo json_encode($return, JSON_PRETTY_PRINT);
    }
    else
    {
        // kill the script and redirect the user regardless
        exit('test');
    }
    

    
?>