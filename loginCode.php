<?php
$host = "localhost";
$user = "php_user";
$password = "bad_password";
$database = "cpteeple_db";
$username = "";
?>

<!DOCTYPE html>
<html>
<head>
<script src="validateForm.js"></script>
<title>Test Login</title>
</head>
<body>
<form id = "myForm" action="#" method="post">
<label>username</label>
<input id="username1" type="text" name="username" placeholder="Name">
<label>password</label>
<input id="password1" type="text" name="password" placeholder="Password">
<input onclick="checkForm()" type="button" value="Login">
</form>
</body>

<?php
    
    if(isset($_POST['username'])) {
        $theusername = $_POST['username'];
        $thepassword = $_POST['password'];
        $foundUsername = FALSE;
        $matchingPassword = FALSE;
        $error = FALSE;
        
        //first look for the username in the database
        $checkUsernameQuery = "SELECT password FROM websiteUsers WHERE username = '" . $theusername . "'";
        $mysqli = new mysqli($host, $user, $password, $database);
        $result = $mysqli->query($checkUsernameQuery);
        echo $mysqli->connect_errno;
        if ($result == FALSE) {
            $error = TRUE;
            echo "The username was not found";
        }
        //If we find the username, check if the password goes with it
        else {
            $assocpassword = $result->fetch_assoc()['password'];
            echo $assocpassword;
            $match = password_verify($thepassword, $assocpassword);

            //If the password is verified...
            if ($match) {
                //create the cookie with the successful login
                //javascript for the cookie goes here
                $cookieName = "user";
                $cookieValue = $theusername;
                setcookie($cookieName, $cookieValue, time() + (86400), "/"); // the / means cookie is avalible within the entire domain and 86400 is seconds in a day
                echo "The cookie has been set!\n";
                if (isset($_COOKIE["user"]))
                    {
                        echo "Welcome again " . $_COOKIE["user"] . "!";
                    }
            }
            
            //if the password does not match, echo error message
            else {
                $error = TRUE;
                echo "The username did not match the password";
            }
        }   
        
    }
?>

</html>