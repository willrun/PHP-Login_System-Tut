<?php

// Allow the config
    define('__CONFIG__', true);
// Require the config
    require_once "inc/config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <title>PHP Home Page</title>
</head>
<body>
    <div class="uk-section uk-container">
        <?php
            echo "Hello World. Today is: ";
            echo date("Y m d t");
        ?>
        <p>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </p>
    </div>

    <?php
        require_once "inc/footer.php";
    ?>
    
</body>
</html>