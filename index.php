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

<title>&#928&#923&#934 &#923&#922 </title>
    <link rel="stylesheet" type="text/css" href="css/stylesheetMain.css">
      <script src="javascript/validateForm.js"></script>    
      </head>
      <body>
      
      <!--Container div for header menu --> 
    <div class="Header">
    <div class="Logo">
    <img src="images/logo.gif" />
    </div>
    <h1> &#928&#923&#934 VA &#923&#922 Chapter </h1>
    
    <div id="LogInContainer" style="float:right">
    <form id= "myForm" action="#" method="post">
    <label>username</label>
    <input id="username1" type="text" name="username" placeholder="Name"><br>
    <label>password</label>
    <input id="password1" type="text" name="password" placeholder="Password">
    <input onclick="checkForm()" type="button" value="Login">
    </form>
    </div>
    </div>
    
    <!-- The below div acts are the container and side menu for buttons -->
    
    <div class="SideBar">
      <div data-content="NewsContent" class="SideBarTab">
        <header  class="TabName"> News </header>
      </div>
      <div data-content="PhilanthropyContent" class="SideBarTab">
        <header class="TabName"> Philanthropy </header>
      </div>
      <div data-content="HistoryContent" class="SideBarTab">
        <header class="TabName"> History </header>
      </div>
      <div data-content="DataBaseContent" class="SideBarTab">
        <header class="TabName"> Data Base </header>
      </div>
    </div>
    
    <div class="ContentPage" id="NewsContent">

      
    <div id="addBox" class="isHidden">
    <form action="#" method="post">
    <label>name</label>
    <input id="name1" type="text" name="name" placeholder="Name"><br>
    <label>year</label>
    <input id="year1" type="text" name="grade" placeholder="Year"><br>
    <label>email</label>
    <input id="email1" type="email" name="contact" placeholder="Email"><br>
    <label>major</label>
    <input id="major1" type="text" name="major" placeholder="Major"><br>
    <input id="submit1" type="submit" name="Add Brother">
    </form>
</div>
    


    <p></p>
    </div>
    <div class="isHidden" id="PhilanthropyContent">
      <h1> Our Philanthropy: </h1>
      <p>
      </p>login
    </div>
    
    <!-- Content div that will display historical imformation about friternity--> 
    <div class="isHidden" id="HistoryContent">
      <h1> National History: </h1>
      <div id="founders">
	<img src="images/Werner.jpg" />
	<img src="images/Levy.jpg" />
	<img src="images/Fisher.jpg" />
	<p style="margin:0px;  color:#4d004d;" > Frederick Werner   Louis Levy   Henry Fisher </p> 
    </div>
      <p>Phi Lambda Phi national fraternity was founded in 1895 at Yale University by Frederick Manfred Werner, Louis Samter Levy, and Henry Mark Fisher. These three men had previously been denied admittance into other college fraternities on the basis of their religious backgrounds.  From their denial came the fundamental Ideals of Phi Lambda Phi. Pi Lam was the first national non-sectarian fraternity, accepting men on the basis of good character regardless of race and religion.
	More national history at:  <a href="http://www.pilambdaphi.org/"> pilambdaphi.org</a> </p>
      <h1> Chapter History: </h1>
      <p>  VA &#923&#922 was refounded in 2012 </p>
      
      </div>
    
     <!-- Content div that will display database of brothers--> 
     <div class="isHidden" id="DataBaseContent">
       <h1> Current Active Brothers: </h1> 
       <table id="directory"></table>
     </div>
    
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
?> <script> alert("error"); </script> <?php
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
<?php
if(isset($_POST["name"])){
    $name = $_POST["name"];
    $year = $_POST["year"];
    $email = $_POST["email"];
    $major = $_POST["major"];
}
    
if(isset($_COOKIE["user"])) {
    echo " this is a test";
?>
          <script src="javascript/loginScript.js"> </script><?php
}

?>


  </body>
  <script src="javascript/tabController.js"> </script>
  <script src="javascript/loadDirectory.js"> </script>
</html>
