var NameSpace = {}; //Creating the namespace

//Loads and formats the data from the xml file
NameSpace.LoadXML = function(xml){
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Name</th><th>Year</th><th>Contact</th><th>Major</th>";
  var brother = xmlDoc.getElementsByTagName("brother");
    for (i=0; i < brother.length; i++){
	table += "<tr><td>" +
	    brother[i].getElementsByTagName("name")[0].childNodes[0].nodeValue + "</td><td>" +
	    brother[i].getElementsByTagName("year")[0].childNodes[0].nodeValue + "</td><td>" +
	    brother[i].getElementsByTagName("contact")[0].childNodes[0].nodeValue + "</td><td>" +
	    brother[i].getElementsByTagName("major")[0].childNodes[0].nodeValue + "</td></tr>";
  };
    document.getElementById("directory").innerHTML = table;
}

//checks the state of the xml file and calls the load function
NameSpace.DisplayXML = function(){
  NameSpace.xmlrequest = new XMLHttpRequest();
  NameSpace.xmlrequest.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      NameSpace.LoadXML(this)
    }
  };
  NameSpace.xmlrequest.open("GET", "Brothers.xml", true);
  NameSpace.xmlrequest.send();
}

NameSpace.DisplayXML();
