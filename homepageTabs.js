var ValidUsername = "Jimmies";
var ValidPassword = "Rustled";

var myTabs = document.getElementsByClassName("SideBarTab");

for (i = 0; i < myTabs.length; i++) {
    myTabs[i].addEventListener("click", function(){
	var myContents = document.getElementsByClassName("ContentPage");
	var news = document.getElementById("NewsContent");
	var phil = document.getElementById("PhilanthropyContent");
	var history = document.getElementById("HistoryContent");
	var database = document.getElementById("DataBaseContent");
	var contentToChange = String(this.getAttribute("data-content"));
	var contentToAddClass = document.getElementById(contentToChange);

	news.className = "isHidden";
	phil.className = "isHidden";
	history.className = "isHidden";
	database.className = "isHidden";

	contentToAddClass.className = "ContentPage";
    });
}
			      
function validate(){
    console.log("afdhgkjahgf");
    if( (document.getElementbByName("Username").value === ValidUserame) &&
	(document.getElementbByName("Password").value === ValidPassword)) {
	document.getElementById("logIn").addClass("isHidden");
    }else{
	alert("Username or Password is invalid.");
    }
} //This is temporary. Will be replaced by a database search for valid
//usernames and their corrosponding passwords. 
	
	

	
