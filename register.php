<?php
// Allow the config
    define('__CONFIG__', true);
// Require the config    
    require_once "inc/config.php"; 

    forceDashboard();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <title>PHP Registration Page</title>
</head>
<body>
    <div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-1-@3 uk-child-width-1-1" uk-grid>
            <form class="uk-form-stacked js-register">
                <div class="uk-margin">
                    <h2>Register</h2>
                    <label class="uk-form-label" for="form-stacked-text">email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="email@address.com">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-select">password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="Your password here">
                    </div>
                </div>

                <!-- <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-select">password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="Retype password here">
                    </div>
                </div> -->

                <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;">
                    Test
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">Register</button>
                </div>
                
            </form>
        </div>
    </div>

    <?php
        require_once "inc/footer.php";
    ?>
    
</body>
</html>