var cookie = {};

cookie.getCookie = function(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
	var c = ca[i];
	while (c.charAt(0)==' ') {
	    c = c.substring(1);
	}
	if (c.indexOf(name) == 0) {
	    return c.substring(name.length,c.length);
	}
    }
    return "";
}

cookie.checkCookie = function() {
    var username=cookie.getCookie("username");
    if (username!="") {
	var log_in = document.getElementById("LogInContainer");
	log_in.className = "isHidden";
	var admin = document.getElementById("DataBaseAdmin");
	admin.className = "Contentpage";
	document.getElementById("Username").value = "";
	document.getElementById("Password").value = "";
	//Code for displaying the database" of brothers
    }
    else {
	//Do nothing
    }
}

cookie.checkCookie();
