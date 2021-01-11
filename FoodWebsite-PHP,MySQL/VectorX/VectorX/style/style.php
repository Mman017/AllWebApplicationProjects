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
#footer .container {
	min-height: 100vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}

#register .container {
	min-height: 100vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}

#login .container {
	min-height: 100vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}
img {
	height: 100%;
	width: 100%;
	object-fit: cover;
}
p {
	color: black;
	font-size: 1.4rem;
	margin-top: 5px;
	line-height: 2.5rem;
	font-weight: 300;
	letter-spacing: .05rem;
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




.slideshow {
	max-width: 700px;
	border: 10px solid #FFFFFF;
	margin: 15px auto;
	position: relative;
	overflow: hidden;
	box-shadow: 10px 10px grey;
	margin-top: 110px;
}

.slideshow .right-slide, .slideshow .left-slide {
	position: absolute;
	height: 40px;
	width: 40px;
	background-color: #444444; 
	border-radius: 50%;
	color: #FFFFFF;
	font-size: 18px;
	top:50%;
	cursor: pointer;
	margin-top: -20px;
	text-align: center;
	line-height: 40px;
	font-weight: bold;
}
.slideshow .right-slide:hover, .slideshow .left-slide:hover {
	box-shadow: 0px 0px 10px  #000000;
	background-color: #42EA;
}

.slideshow .left-slide {
	left: 20px;
}

.slideshow .right-slide {
	right: 20px;
}


.slideshow .slide-image .photo img {
	max-width: 100%;
	display: block;
	animation: zoom .7s ease;
}

@keyframes zoom {
	0% {transform: scale(2); opacity: 0;}
	100% {transform: scale(1); opacity: 1;}
}

.slideshow .slide-image .photo {
	display: none;
}

.slideshow .slide-image .photo.active{
	display: block;
}





#searchItem form {
  width: 90%;
  max-width: 400px;
  margin: 20px auto;
  background-color: rgb(223, 223, 223);
  padding-top: 10px;
  margin-top: 50px;
}

#searchItem .searchBar {
  width: 20%;
  padding: 8px;
  border-radius: 4px;
  border: none;
  outline: none;
  font-size: 1rem;
  background-color: rgb(223, 223, 223);
  display: inline-block;
  margin-top: 10px;
  padding-top: 10px;
  text-align:center;	
   margin-left:40%;
}


/* Food Section */
#foods .foods {
	flex-direction: column;
	text-align: center;
	max-width: 1500px;
	margin: 0 auto;
	padding: 20px 0;
}

#foods .food-bottom {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;

}
#foods .food-item {
	flex-basis: 80%;
	display: flex;
	align-items: flex-start;
	justify-content: center;
	flex-direction: column;
	padding: 30px;
	border-radius: 10px;
	background-size: cover;
	margin: 10px 5%;
	position: relative;
	z-index: 1;
	overflow: hidden;
}
#foods .food-item::after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	opacity: .9;
	z-index: -1;
}
#foods .food-bottom .icon {
	height: 200px;
	width: 100%;
	margin-bottom: 20px;
}
#foods .food-item h2 {
	font-size: 2rem;
	color: white;	
	margin-bottom: 5px;
	text-transform: uppercase;
}
#foods .food-item p {
	color: white;
	text-align: left;
	margin-top:1px;
}

#foods .view-btn {
	display: inline-block;
	padding: 10px 10px;
	color: white;
	background-color: transparent;
	border: 2px solid royalBlue;
	font-size: 1rem;
	text-transform: uppercase;
	letter-spacing: .1rem;
	margin-top: 30px;
	transition: .3s ease;
	transition-property: background-color, color;
}
#foods .view-btn:hover {
	color: white;
	background-color: royalBlue;
}



.register {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
}

 .card-box {
	flex-basis: 40%;
	
	display: flex;
	align-items: flex-start;
	justify-content: center;
	flex-direction: column;
	padding: 30px;
	border-radius: 10px;
	background-size: cover;
	margin: 10px 5%;
	position: relative;
	z-index: 1;
	overflow: hidden;
}
 .card-box ::after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	opacity: .9;
	z-index: -1;
}

 .card-box  form{
  display: block;
  margin-right: auto;
  margin-left: auto;
  
}
 .menu h2{
	text-align:center;
}

 .menu  li{
	padding-top:15px;
    list-style-type: none;
}

 .menu button{
  display: block;
  margin-right: auto;
  margin-left: auto;
  	margin-top:15px;
  
}

.signUpErromessage{
	color:red;
}

.signUpmessage{
	color:royalblue;
}

#register h2{
	color:royalblue;
	font-size:2rem;
}

/* End Food Section */



/* Footer */
#footer {
  background-color: #212F3C;
}
#footer .footer {
	min-height: 200px;
	flex-direction: column;
	padding-top: 50px;
	padding-bottom: 10px;
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



/* Keyframes */
@keyframes hamburger_puls {
	0% {
		opacity: 1;
		transform: scale(1);
	}
	100% {
		opacity: 0;
		transform: scale(1.4);
	}
}
@keyframes text_reveal_box {
	50% {
		width: 100%;
		left: 0;
	}
	100% {
		width: 0;
		left: 100%;
	}
}
@keyframes text_reveal {
	100% {
		color: white;
	}
}
@keyframes text_reveal_name {
	100% {
		color: crimson;
		font-weight: 500;
	}
}
/* End Keyframes */

/* Media Query For Tablet */
@media only screen and (min-width: 768px) {
	.cta {
		font-size: 2.5rem;
		padding: 20px 60px;
	}
	h1.section-title {
		font-size: 6rem;
	}

	

	/* Services Section */
	#foods .food-bottom .food-item {
		flex-basis: 45%;
		margin: 2.5%;
	}

}
/* End Media Query For Tablet */

/* Media Query For Desktop */
@media only screen and (min-width: 1200px) {

	#foods .food-bottom .food-item {
		flex-basis: 22%;
		margin: 1.5%;
	}
}
/* End  Media Query For Desktop */

/* admin style */

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


.addItemSQL {
	text-align:center;
	margin-top: 20px;
    margin-bottom: 20px;
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


