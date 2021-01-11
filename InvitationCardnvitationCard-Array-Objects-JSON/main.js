// Create show and hide animation for invitation card
var a;
function clickFunction() {
	if(a==1){
  document.getElementById("panel").style.display = "block";
  return a=0;
  }
  else{
    document.getElementById("panel").style.display = "none";
     return a=1;
  }
}

// Create array objects for image slider
var myImage = document.getElementById('mainImage');
var imageArray = ["./style/images/about-author.jpg", "./style/images/LearnHybridCloud.png", "./style/images/detect&ProtectClound.png", "./style/images/techniquesCyberAttack.png"];
var imageIndex = 1;
function changeImage(){
	myImage.setAttribute("src", imageArray[imageIndex]);
	imageIndex++;
	if(imageIndex > 3){imageIndex = 0;}
}


// Create Constructor function for object event description
function content(titleevent, dateevent, register) {
  this.event_title = titleevent;
  this.event_date = dateevent;	
  this.event_register = register;
  this.eventTitle = function() {
    return this.event_title
  };
   this.eventDate = function() {
    return this.event_date
  };
     this.registerEvent = function() {
    return this.event_register
  };
}
// Create a event description object
var description = new content("CLOUDSEC2020", "Virtual | November 24–26", "Register Now");

// Display event description
document.getElementById("EventTitle").innerHTML = description.eventTitle(); 
document.getElementById("EventDate").innerHTML = description.eventDate(); 
document.getElementById("EventRegisterLink").innerHTML = description.registerEvent(); 


// Create a JSON object for event footer description
var myObj, Footer_1, footer_2, footer_3;
myObj = {"ft1":"Hybrid Cloud Security", "ft2":"Network Defence", "ft3":"User Protection"};
Footer_1 = myObj["ft1"];
footer_2 = myObj["ft2"];
footer_3 = myObj["ft3"];
// Display event footer description
document.getElementById("footer1").innerHTML = Footer_1;
document.getElementById("footer2").innerHTML = footer_2;
document.getElementById("footer3").innerHTML = footer_3;