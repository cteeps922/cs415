<!DOCTYPE html>
<?php
    
      if(isset($_POST['username'])) {
          $host = "localhost";
          $user = "php_user";
          $password = "bad_password";
          $database = "cpteeple_db";
          $theusername = $_POST['username'];
          $thepassword = $_POST['password'];
          $foundUsername = FALSE;
          $matchingPassword = FALSE;
          $error = FALSE;
        
        //first look for the username in the database
        $checkUsernameQuery = "SELECT password FROM websiteUsers WHERE username = '" . $theusername . "'";
        $mysqli = new mysqli($host, $user, $password, $database);
        $result = $mysqli->query($checkUsernameQuery);

          if ($result == FALSE) {
            $error = TRUE;
          }
        //If we find the username, check if the password goes with it
        else {
            $assocpassword = $result->fetch_assoc()['password'];
            $match = ($assocpassword == $thepassword);

            //If the password is verified...
            if ($match) {
                
                //create the cookie with the successful login
                //javascript for the cookie goes here
                $cookieName = "user";
                $cookieValue = $theusername;
                echo $cookieName . $cookieValue;
                setcookie($cookieName, $cookieValue, time() + (86400), "/"); // the / means cookie is avalible within the entire domain and 86400 is seconds in a day
                if (isset($_COOKIE["user"])) {
                    echo "fuck da bullshit";
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
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="Website.css">
  </head>
  <body>
    <div class="Header">
      <div class="Logo">
        <img src="http://www.pilambdaphi.org/atf/cf/%7B9D4C0D8C-8A79-488E-A3DE-0DA60F108B1E%7D/crest.gif" />
      </div>

    </div>
    <div class="SideBar">

      <div data-content="NewsContent" class="SideBarTab">
        <header  class="TabName"> News </header>
      </div>
      <div data-content="PhilanthropyContent" class="SideBarTab">
        <header class="TabName"> Philanthropy <header>
      </div>
      <div data-content="HistoryContent" class="SideBarTab">
        <header class="TabName"> History </header>
      </div>
      <div data-content="DataBaseContent" class="SideBarTab">
        <header class="TabName"> Data Base </header>
      </div>
    </div>

    <div class="ContentPage" id="NewsContent">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis consectetur quis lacus quis malesuada. Duis lacus ex, efficitur id feugiat et, efficitur sit amet nisl. Nulla ac ipsum bibendum, semper justo sed, ultricies tortor. Sed pulvinar lorem et sodales fringilla. Suspendisse gravida lacus at egestas efficitur. Donec ullamcorper, urna non volutpat faucibus, diam nisi dignissim neque, varius tempor leo felis sit amet sem. Nullam posuere, tellus ut pretium interdum, ex ligula mattis mauris, non venenatis leo ante et libero. Nunc dictum, enim consequat porta volutpat, tellus massa tempor mauris, quis tempor justo nunc at sem. Cras aliquet, ex non cursus tristique, risus dui egestas turpis, sed consequat neque quam hendrerit tortor. Mauris interdum arcu sed fermentum viverra. Mauris malesuada nec tortor in mollis. Fusce et massa a dolor rhoncus venenatis nec non nibh. Vestibulum sollicitudin urna vitae ornare consectetur.
	+
	+Etiam vestibulum nisl eu odio molestie ullamcorper. Donec vel ultrices sapien. Sed id tortor dui. Maecenas elementum turpis felis, vitae dignissim libero sagittis quis. Vivamus dictum facilisis tristique. Donec vestibulum, urna sed porttitor ultricies, est est consectetur orci, vitae vulputate neque ipsum at tortor. Praesent pretium lorem in turpis ullamcorper, eget pulvinar tortor dapibus. Mauris nisi lacus, faucibus eu imperdiet sed, auctor volutpat ex. Nulla scelerisque efficitur metus at tincidunt. Pellentesque id velit id tellus placerat placerat.
	+
       +Etiam nunc felis, vehicula ac luctus non, vehicula ac diam. Etiam sit amet libero eget urna tempor interdum. Ut id porttitor massa. Nam sed nisl purus. Nulla congue nulla ac orci commodo consectetur. Nam pretium lorem vel nisl egestas, vel sagittis metus vestibulum. Aliquam erat volutpat. Suspendisse pulvinar dui lorem, a vehicula ipsum feugiat at. Ut feugiat lacinia risus, ut euismod augue consequat vel. Nullam vel convallis arcu, ac lacinia nisl.</p>
    </div>
    <div class="ContentPage" id="PhilanthropyContent">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	+Curabitur scelerisque urna ut nisi tristique efficitur et volutpat tortor.
	+Quisque a leo eleifend, elementum mauris ut, hendrerit augue.
	+Morbi tristique magna eget convallis tincidunt.
	+Aliquam vitae magna tincidunt, posuere nulla viverra, placerat metus.
	+Mauris aliquet mauris ut sapien blandit fringilla.
	+Ut placerat libero consequat sodales semper.
	+Sed ut diam vulputate mi aliquet faucibus vitae vel ipsum.
	+Sed hendrerit sapien nec enim dictum dapibus.
       +Nullam vulputate nibh in nibh varius, non hendrerit enim congue.Content</p>
    </div>
    <div class="ContentPage" id="HistoryContent">
      <p>Vestibulum vitae sodales tellus. Ut a mattis odio, sit amet interdum erat. Sed non semper ex, non dignissim dolor. Donec ac nisl eros. Morbi eleifend elementum est.</p>
    </div>
<!-- This script checks for a username cookie -->
    
    <div class="ContentPage" id="DataBaseContent">
      <p> In this section each of the menu divs will be shown or hidden depending on which one is selected at that time. Pictures and content will be provided by a representative of Pi Lam. All data will be present on this one web page and the user does not have to go to any other page. Data will be stored directly in each div. The database of brothers will be behind a username and password lock handled by PHP. This database will hold biographical and professional information of every current and future member, pulled from LinkedIns API. More input on style will be taken from President of Pi Lam as progres continues.  </p>
    <script src="checkCookie.js"> </script>
      <div id = "LogInContainer" class="LogInContainer">
	<form id ="logIn" action="#" method="post">
	    <input id="Username" type="text" name="username" placeholder= "username">
	    <input id="Password" type="text" name="password" placeholder="password">
	  <input class="button" type="submit" value="Submit">
	</form>
      </div>
    </div>
    <?php
      if(isset($_COOKIE["user"])) {
          echo " this is a test";
?>
           <script src="loginScript.js"> </script><?php
          }
     ?>
  </body>
  <script src="homepageTabs.js"> </script>
</html>
