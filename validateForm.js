function checkForm() {
    //get all entered fields
    var username = document.getElementById("username1").value;
    var password = document.getElementById("password1").value;
    
    //check to make sure the fields are not blank
    if (username == '' || password == '') {
	alert("please complete all fields");
    }
    else {
	//Submit Form When All values are valid.
	document.getElementById("myForm").submit();
    }
}
