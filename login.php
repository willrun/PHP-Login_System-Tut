<?php
    define('__CONFIG__', true);
    require_once "inc/config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <title>PHP Login Page</title>
</head>
<body>
    <div class="uk-section uk-container uk-text-center">
        <div class="uk-grid uk-child-width-1-@3 uk-child-width-1-1" uk-grid>
            <form class="uk-form-stacked">
                <div class="uk-margin js-login">
                    <h2>Login</h2>
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="email@address.com">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-select">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="Your password here">
                    </div>
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">LOGIN</button>
                </div>
                
            </form>
        </div>
    </div>

    <?php
        require_once "inc/footer.php";
    ?>
    
</body>
</html>