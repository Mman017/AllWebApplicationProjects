<?php
header("Content-type: text/css; charset: UTF-8");
$body_bg = “red”;//”#DBF5F3″;
$box_bg = “blue”;//”#DBF5F3″;
?>



html {
  font-family: "Montserrat";
  font-size: 12px;
}

@import 'https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap';
* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
html {
	font-size: 10px;
	font-family: 'Montserrat', sans-serif;
	scroll-behavior: smooth;
}

body {
	background-color: #b6b6b6 ;
}


a {
	text-decoration: none;
}


.cta {
	display: inline-block;
	padding: 10px 30px;
	color: white;
	background-color: royalblue;
	border: 2px solid royalblue;
	font-size: 2rem;
	text-transform: uppercase;
	letter-spacing: .1rem;
	margin-top: 30px;
	transition: .3s ease;
	transition-property: background-color, color;
}
.cta:hover {
	color: white;
	background-color: #42EADDFF;
}





header {
background-color: #212F3C;
padding: 15px;
text-align: center;
overflow-x: hidden;
}

header li { 
	display: inline;
	padding-left: 45px;
} 
header li a{
	color: 	#FFFFFF;
	font-size: 20px;
	text-decoration: none;
	font-family: "Montserrat";
	padding: 13px;
	transition: .5s ease;
	top: -1px;
}
header li a:hover{
	color: royalblue;
}

header ul #adminLogin a {
	color: #fff;
	background-color: royalblue;
	background-size: 5px;
	border-radius: 30px;
	float: right;
	position: relative;
	transition: .5s ease;
}
header ul #adminLogin a:hover{
	background-color: #42EADDFF;
}

header ul img {
	width: 130px;
	float: left;
	margin-top: auto;

}

#header .nav-list #adminLogin a {
	background-color: royalblue;
	background-size: 5px;
	border-radius: 30px;
	float: right;
	position: relative;
	transition: .5s ease;
}


.addItemSQL {
	text-align:center;
	margin-top: 20px;
    margin-bottom: 20px;
}

.insertnewData{
	font-size: 2rem;
}

.searchItem{
  margin-left:73.1%;
  margin-bottom: 2px;
}


#buttonViewer .sortDescription{
	margin-left:200px;

}

#buttonViewer .sortButton{
	display: inline-block;
	padding: 5px 30px;
	color: Black;
	background-color: white;
	border: 2px solid white;
	font-size: 1rem;
	text-transform: uppercase;
	width: 130px;
	margin-left:200px;
	text-align:center;
}

#buttonViewer .sortButton:hover{
	background-color: lightgrey;
	border: 2px solid lightgrey;
}

#panel {
  display: none;
}

#panel .panel-item input{
	padding: 5px 5px;
	color: Black;
	background-color: white;
	border: 2px solid white;
	font-size: 1rem;
	width: 130px;	
	text-transform: uppercase;
	margin-left:200px;
	text-align:left;
}

#panel .panel-item input:hover{
	background-color: royalblue;
	border: 2px solid royalblue;

}


#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-right:auto;
  margin-left:auto;
  width: 80%;
  margin-bottom: 50px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}



/* Footer */
#footer {
  background-color: #212F3C;
}

#footer .container{
	min-height: 100vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}
#footer .footer {
	min-height: 200px;
	flex-direction: column;
	padding-top: 50px;
	padding-bottom: 10px;
}

#footer img {
	height: 100%;
	width: 100%;
	object-fit: cover;
}

#footer .brand h1 {
	font-size: 3rem;
	text-transform: uppercase;
	color: white;
}
#footer .brand h1 span {
	color: crimson;
}


#footer .social-icon {
	display: flex;
	margin-bottom: 30px;
}
#footer .social-item {
	height: 50px;
	width: 50px;
	margin: 0 5px;
}
#footer .social-item img {
	filter: grayscale(1);
	transition: .3s ease filter;
}
#footer .social-item:hover img {
	filter: grayscale(0);
}
#footer p {
	color: white;
	font-size: 1.3rem;
}

