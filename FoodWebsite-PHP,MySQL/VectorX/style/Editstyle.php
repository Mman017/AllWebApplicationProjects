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

img {
	height: 15%;
	width: 20%;
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

header ul #contactUs a {
	color: #fff;
	background-color: royalblue;
	background-size: 5px;
	border-radius: 30px;
	float: right;
	position: relative;
	transition: .5s ease;
}
header ul #contactUs a:hover{
	background-color: #42EADDFF;
}

header ul img {
	width: 130px;
	float: left;
	margin-top: auto;

}

#header .nav-list #contactUs a {
	background-color: royalblue;
	background-size: 5px;
	border-radius: 30px;
	float: right;
	position: relative;
	transition: .5s ease;

}


/* Services Section */
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
	margin-top: 50px;
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

#foods .imageEdit {
	margin-right:30px;
	height: 100%;
	width: 80%;
	object-fit: cover;
}


#foods .form-group{
	text-align:left;
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
/* End Services Section */

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


