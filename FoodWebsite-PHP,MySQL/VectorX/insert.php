<!--
@Author: Molines, Emmanuel D.,
@Parnacio, Homard T.
@Date: 12/14/2020
@Version: 1.0
-->
<?php
require_once './includes/db.php';

if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
	$name =($_POST['name']);
	$ingredients =($_POST['Ingredients']);
	$calories =($_POST['Calories']);
	$url =($_POST['urlRecipe']);
	
    $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
	
	$sql = "INSERT INTO foodItem(name,Ingredients,Calories,imageType ,imageData, urlRecipe)
	VALUES('{$name}','{$ingredients}','{$calories}','{$imageProperties['mime']}', '{$imgData}', '{$url}')";
	$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
	if(isset($current_id)) {	
		header("Location: admin.php");
	}
}
}
?>
<HTML>
	<HEAD>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" type="text/css" href="./style/Editstyle.php">
	  <title>My Website</title>
	</HEAD>
	<BODY>
	
	 <!-- Header Navigation Bar -->
  	<div class="navbar">
 	<header>
 		<nav>
        	<ul class="menu">
        		<li><img src="./image/logo.png" alt="Vector X logo"></li>
				<li><a href="admin.php">FOOD ITEMS</a></li>
				<li><a href="adminAccount.php">VIEW USER ACCOUNTS</a></li>
				<li id="contactUs">		<a href="index.php" role="button" class="btn btn-primary pull-right">Home</a></li>
        	</ul>
		</nav>
	 </header>
	</div>
	<!-- End of Header Navigation Bar -->	
	
	 <!-- Service Section -->
  <section id="foods">
    <div class="foods container">
      <div class="food-top">
        <h1 class="section-title"></h1>
        <p></p>

      </div>
      <div class="food-bottom">
        <div class="food-item">
	<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
		
     	<div class="form-group">  
		<input name="userImage" type="file" class="inputFile"/>
			
		</div>
		  
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" class="form-control" placeholder="Enter Name">
		</div>
		
		<div class="form-group">
			<label for="name">Ingredients: </label>
			 <input type="text" name="Ingredients" class="form-control" placeholder="Enter Ingredients">
		</div>
		
		<div class="form-group">
			<label for="name">Calories(kcal):</label>
			 <input type="text" name="Calories" class="form-control" placeholder="Enter Calories">
		</div>
		
		<div class="form-group">
			<label for="name">Recipe URL:</label>
			 <input type="text" name="urlRecipe" class="form-control" placeholder="Enter Recipe URL">
		</div>
		
		<div class="form-group">
			 <input type="submit"  class="btn btn-success" value="Add new Item" class="btnSubmit" name="insert"/>

		</div>
		
		</form>
        </div>
  <!-- End Service Section -->
	</section>	  
	

		
	</BODY>
</HTML>