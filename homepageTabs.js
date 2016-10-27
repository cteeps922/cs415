var myTabs = document.getElementsByClassName("SideBarTab");
var myContents = document.getElementsByClassName("ContentPage");
for (i = 0; i < myTabs.length; i++) {
    myTabs[i].addEventListener("click", function(){
	
	for (j = 0; j < myContents.length; j++) {
	    myContents[j].setAttribute("class", "isHidden")
	}
    })
}
			      

