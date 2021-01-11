/*
@Author: Molines, Emmanuel D.
@Date: 11/30/2020
@Version: 1.0
*/

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