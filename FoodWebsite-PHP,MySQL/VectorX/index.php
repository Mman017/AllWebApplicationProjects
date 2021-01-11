<!--
@Author: Molines, Emmanuel D.
@Batuyong, Genesis L.
@Date: 11/30/2020
@Version: 1.0
-->
<?php

require_once './includes/db.php';
include_once './includes/header.php';
?>
  <form action="index.php" method="post">
	  
  <section id="slider">	
	 <!-- Image slideshow-->
	 <div class="slideshow">
		<div class="slide-image">
			<div class="photo active">
				<img src="./image/1.png">	
			</div>
			<div class="photo">
				<img src="./image/2.png">	
			</div>
			<div class="photo">
				<img src="./image/3.png">	  
			</div>
		</div>
	
		 <!--slider-show buttons-->
		 <div class="right-slide">-></div>
		 <div class="left-slide"><-</div>
 	</div>
  </section>

 <!--Api Data Container-->
    <section id="searchItem">
	
      <input class="searchBar" type="text" name="valueToSearch" placeholder="Search Item">
     <input type="submit" name="search" value="Search">
    </section>
	
	
		<section id="buttonViewer">	
		<h2 class="sortDescription">Sort By: </h2>	
		<a class="sortButton" onclick="clickFunction()">Select</a>
	</section>	

	<section id="panel">
		<div class="panel container">

		  <div class="panel-box">
		  
			<div class="panel-item">	
        	<ul>
        		<li><input type="submit" name="ASC" value="By Calories - ASC"></li>
        		<li><input type="submit" name="DESC" value="By Calories - DESC"></li>
				<li><input type="submit" name="titleASC" value="By Title - ASC"></li>
				<li><input type="submit" name="titleDESC" value="By Title - DESC"></li>
        	</ul>
			</div>
		
		  </div>
		</div>
	</section>

	
 <!-- Food Section -->
  <section id="foods">
    <div class="foods container">
      <div class="food-top">
        <h1 class="section-title"></h1>
        <p></p>

      </div>
      <div class="food-bottom">


<?php  		            
		
	
  /* If statement for search functionality for index.php */
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `fooditem` WHERE CONCAT(`id`, `name`, `Ingredients`, `Calories`) LIKE '%".$valueToSearch."%'";
    $result = mysqli_query($conn,$query);
    
}
 else {
    $query = "SELECT * FROM `fooditem`";
    $result = mysqli_query($conn,$query);
}
		
if(isset($_POST['ASC']))
{
	$query = "SELECT * FROM `fooditem` ORDER BY Calories asc";
	$result = mysqli_query($conn,$query);
}

// Descending Order
elseif (isset ($_POST['DESC'])) 
{
	$query = "SELECT * FROM `fooditem` ORDER BY Calories desc";
	$result = mysqli_query($conn,$query);
}
elseif (isset ($_POST['titleASC'])) 
{
	$query = "SELECT * FROM `fooditem` ORDER BY name asc";
	$result = mysqli_query($conn,$query);
}
elseif (isset ($_POST['titleDESC'])) 
{
	$query = "SELECT * FROM `fooditem` ORDER BY name desc";
	$result = mysqli_query($conn,$query);
}




if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
        $id    = $row['id'];
        $name  = $row['name'];
        $ingredients = $row['Ingredients'];
        $calories = $row['Calories'];
  		$url = $row['urlRecipe'];
?>
	  <!--Food Items -->
		<div class="food-item">
		
		  <div class="icon"><img src="./includes/imageView.php?image_id=<?php echo $row["id"]; ?>" /></div>
			<h2><?=$name; ?></h2>
			<p>Calories: <?=$calories; ?> kcal</p>
			<p>Ingredients: <?=$ingredients; ?></p>
			<a class="view-btn" target="_blank" href="<?=$url; ?>">Recipe</a>
		
		</div>
	  <!--End of Food Items  -->
<?php
    }	
}         
?>
		
      </div>
    </div>
  </section>
    <!--End of footer Section  -->
	

		 <script type="text/javascript" src="./javascript/sortAdmin.js"></script>
	 <script type="text/javascript" src="./javascript/slider.js"></script>
	     </form>
<?php
include_once './includes/footer.php';
?>	


