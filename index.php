<!DOCTYPE html>
<html>
  <head>
    <title>&#928&#923&#934 &#923&#922 </title>
    <link rel="stylesheet" type="text/css"
    href="css/stylesheetMain.css">
    
  </head>
  <body>
    <!--Container div for header menu --> 
    <div class="Header">
      <div class="Logo">
        <img src="images/logo.gif" />

      </div>
      
      <h1> &#928&#923&#934 VA &#923&#922 Chapter</h1> 
    </div>
    
    <!-- The below div acts are the container and side menu for buttons --> 
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
      <div id="slideshow">
      <img class="mySlides" src="images/1.jpg">
      <img class="mySlides" src="images/2.jpg">
      <img class="mySlides" src="iamges/3.jpg">
      <img class="mySlides" src="images/4.jpg">
      <img class="mySlides" src="images/5.jpg">
      <img class="mySlides" src="iamges/6.jpg">
      <img class="mySlides" src="images/7.jpg">
      <img class="mySlides" src="iamges/8.jpg">
      </div>
      <h1> News: </h1>
      <p></p>
    </div>
    <div class="isHidden" id="PhilanthropyContent">
      <h1> Our Philanthropy: </h1>
      <p>For our National Philanthropy, we support EOP. EOP represents
      the elimatnation of prejudice. </p>
    </div>
    
    <!-- Content div that will display historical imformation about friternity--> 
    <div class="isHidden" id="HistoryContent">
      <h1> National History: </h1>
      <div id="founders">
	<img src="images/Werner.jpg" />
	<img src="images/Levy.jpg" />
	<img src="images/Fisher.jpg" />
      <p style="margin:0px;  color:#4d004d;" > Frederick Werner, and Louis
    Levy, and  Henry Fisher </p> 
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
      
   </body>
      
   <script src="javascript/tabController.js"> </script>
   <script src="javascript/loadDirectory.js"> </script>
   <script src="javascript/SlideShow.js"> </script>
      
   <script> var name = "nick", year = "<?= $year ?>", contact
   = "<?= $contact ?>", major = "<?= $major ?>";</script>
   <script src="javascript/addXML.js"> </script>

</html>
