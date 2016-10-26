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
    })
}
			      

