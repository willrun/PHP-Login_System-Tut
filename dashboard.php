<?php

// Allow the config
    define('__CONFIG__', true);
// Require the config
    require_once "inc/config.php";

    forceLogin();

    // echo ($_SESSION['user_id']) . " is your user id!";
    // exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="uk-section uk-container">
        Hello
    </div>
</body>
</html>