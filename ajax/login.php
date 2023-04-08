<?php
     // Allow the config
     define('__CONFIG__', true);
     // Require the config    
     require_once "../inc/config.php";

     if($_SERVER['REQUEST_METHOD'] == 'POST')
     // Always return in json format
     {
         // header('Content-Type: application/json');
         $return = [];
         // filters out sql injection attempts
         $email = Filter::String($_POST['email']);
         $password = $_POST['password'];
         // check if they have an account
         $findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
         $findUser->bindParam(':email', $email, PDO::PARAM_STR);
         $findUser->execute();
 
         if($findUser->rowCount()==1)
         {
             // User exists, try to sign them in
             $User = $findUser->fetch(PDO::FETCH_ASSOC);
             $user_id = (int) $User['user_id'];
             $hash = $User['password'];

             if(password_verify($password, $hash))
             {
                // User is signed in
                $return['redirect'] = '/phpLoginCourse/dashboard.php?message=welcome back';
                $_SESSION['user_id'] = $user_id;
             }
             else
             {
                // Invalid  email/password entered
                $return['email'] = 'Invalid  email/password entered';
             }
         }
         else
         {
            // They need to create a new account
             $return['error'] = 'You do not have an account. <a href="/phpLoginCourse/register.php">Click here to create one</a>';
         }
         // Returns the proper information back to javascript to redirect
         echo json_encode($return, JSON_PRETTY_PRINT); 
         exit;
     }
     else
     {
         // kill the script and redirect the user regardless
         exit('Invalid URL');
     }
     

?>