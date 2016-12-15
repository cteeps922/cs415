/// MICHAEL KOHLHAAS, NICK RINALDI, CHRIS TEEPLE
//      CPSC 415
// THIS SCRIPT WILL BE USED TO CONTROL THE TAPS AND CORRESPONDING DIVS FOR index.html

var tabControl = {}; //ASSERT: Acts as namespace for program 

//PRE: initalize is part of the tabContol namespace. When called it hands the showing and hiding
//     of content divs
//POST: When a tab is clicked it sets the class name of all other divs to "isHidden"
//      showing the coresponding div
tabControl.initalize = function(){
    var myTabs = document.getElementsByClassName("SideBarTab"); //ASSERT: An array of tab divs
    //ASSERT: Iterates through all the tab divs (4 of them) in myTabs and adds an even listener
    //        for each one.
    for (i = 0; i < myTabs.length; i++) {
	myTabs[i].addEventListener("click", function(){
	    //PRE: Only ever called when a tab div is clicked
	    //POST: handels the hiding and showing of content divs
	    var news = document.getElementById("NewsContent"); //ASSERT: var for news div
	    var phil = document.getElementById("PhilanthropyContent");//ASSERT: var for phil div
	    var history = document.getElementById("HistoryContent");//ASSERT:var for history div
	    var database = document.getElementById("DataBaseContent");//ASSERT:var for database div
	    // The next two varibles are used in determinging the current clicked div and
	    // unhiding it
	    var contentToChange = String(this.getAttribute("data-content")); //ASSERT: gets the
	    // data-content value of the clicked tab
	    var contentToAddClass = document.getElementById(contentToChange);
	    //ASSERT: var to hold the current clicked tab element 

	    //ASSERT: Hides all content divs
	    news.className = "isHidden";
	    phil.className = "isHidden";
	    history.className = "isHidden";
	    database.className = "isHidden";
	 
	    //ASSERT: UNhides the current content div
	    contentToAddClass.className = "ContentPage";
	});
    }
};


tabControl.initalize();
