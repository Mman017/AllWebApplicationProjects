<!--
@Author: Molines, Emmanuel D.
@Parnacio, Homard T.
@Date: 11/30/2020
@Version: 1.0
-->
<?php
require_once './includes/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="./style/Editstyle.php">
  <title>My Website</title>
</head>
<body>

 <!-- Header Navigation Bar -->
  	<div class="navbar">
 	<header>
 		<nav>
        	<ul class="menu">
        		<li><img src="./image/logo.png" alt="Vector X logo"></li>
				
				 
        		<li><a href="#">UPDATE ITEM</a></li>
        		 <!--
				<li><a href="foodVideo.html">FOOD VIDEOS</a></li>
				
				-->
        		<li id="contactUs"> <a href="admin.php" role="button" class="btn btn-primary pull-right">BACK</a></li>
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

<?php 

if(isset($_GET['update'])){
    
    
    $id = $_GET['update'];
    

$query = "SELECT * FROM fooditem WHERE id = $id";

$result = mysqli_query($conn,$query);






if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
            $name  = $row['name'];
            $batch = $row['Ingredients'];
            $email = $row['Calories'];
			$imagetype = $row['imageType'];
            $imagedata = $row['imageData'];
			$url = $row['urlRecipe'];
        }
    }
}

if(isset($_POST['update'])){
    

    $name         = clean($_POST['name']);
    $batch        = clean($_POST['Ingredients']);
    $email        = clean($_POST['Calories']);
    $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
	$url =($_POST['urlRecipe']);



    $query  = "UPDATE fooditem SET ";
    $query .= "name = '".escape($name)."', ";
    $query .= "Ingredients = '".escape($batch)."', ";
    $query .= "Calories = '".escape($email)."', ";
	$query .= "imageType = '{$imageProperties['mime']}.', ";
    $query .= "imageData = '{$imgData}.', ";
	$query .= "urlRecipe = '{$url}' ";
    $query .= "WHERE id = {$id} ";
    
    $result = mysqli_query($conn,$query);
    
    if($result){
        
        header('location:admin.php');
    }
    else
    {
        die('error' . mysql_error($conn));
    }
    
  }

?>

        <div class="food-item">
		<form action="" method="post" enctype="multipart/form-data">
		
     	<div class="form-group">  
				<input name="userImage" type="file" class="inputFile"/>
		</div>
		  
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $name ?>">
		</div>
		
		<div class="form-group">
			<label for="name">Ingredients: </label>
			<input type="text" name="Ingredients" class="form-control" placeholder="Enter batch" value="<?php echo $batch ?>">
		</div>
		
		<div class="form-group">
			<label for="name">Calories(kcal):</label>
			<input type="text" name="Calories" class="form-control" placeholder="Enter email" value="<?php echo $email ?>">
		</div>
		
		<div class="form-group">
			<label for="name">Recipe URL:</label>
			 <input type="text" name="urlRecipe" class="form-control" placeholder="Enter recipe URL">
		</div>
		
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="Update Item" name="update">
		</div>
		
		</form>
        </div>
  <!-- End Service Section -->
	</section>
</body>
</html>


