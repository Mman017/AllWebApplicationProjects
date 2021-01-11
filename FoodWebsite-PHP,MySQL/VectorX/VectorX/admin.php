<!--
@Author: Molines, Emmanuel D.,
@Parnacio, Homard T.
@Batuyong, Genesis L.
@Date: 12/14/2020
@Version: 1.0
-->
<?php
   require_once './includes/db.php';
   //serves as the session handling for the admin.php
   //returns the user if their $_SESSION[usersId] doesn't exist yet.
   include 'includes/require_session.php';
   
    $sql = "SELECT * FROM foodItem ORDER BY id ASC"; 
    $result = mysqli_query($conn, $sql);


	if(isset($_POST['search']))
	{
		$valueToSearch = $_POST['valueToSearch'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `foodItem` WHERE CONCAT(`id`, `name`, `Ingredients`, `Calories`) LIKE '%".$valueToSearch."%'";
		$result = mysqli_query($conn,$query);
		
	}
	 else {
		 //  $query = "SELECT * FROM `student` ORDER BY imageId desc";
		$query = "SELECT * FROM `foodItem`";
		$result = mysqli_query($conn,$query);
	}
	
	if(isset($_POST['ASC']))
	{
			$query = "SELECT * FROM `fooditem` ORDER BY id asc";
			$result = mysqli_query($conn,$query);
	}

	// Descending Order
	elseif (isset ($_POST['DESC'])) 
		{
			$query = "SELECT * FROM `fooditem` ORDER BY id desc";
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
		
		


?>
<HTML>
<HEAD>
<TITLE>VectorX</TITLE>
 <link rel="stylesheet" type="text/css" href="./style/Adminstyle.php">
</HEAD>
<BODY>

<form action="admin.php" method="post">
 <link rel="stylesheet" type="text/css" href="./style/Adminstyle.php">
  <!-- Header Navigation Bar -->
  	<div class="navbar">
 	<header>
 		<nav>
        	<ul class="menu">	
        		<li><img src="./image/logo.png" alt="Vector X logo"></li>
        		<li><a href="admin.php">FOOD ITEMS</a></li>
				<li><a href="adminAccount.php">VIEW ADMIN ACCOUNTS</a></li>
				<li id="contactUs">	<a href="index.php" role="button" class="btn btn-primary pull-right">HOME</a></li>
        	</ul>
		</nav>
	 </header>
	</div>
	  <!-- End of Header Navigation Bar -->	


    <div class="jumbotron text-center">
       
    </div>

    
		
	<div class="addItemSQL">
          <a class="cta"  href="insert.php" role="button" class="btn btn-primary pull-right">INSERT NEW DISH</a>
    </div>
	
	<section id="buttonViewer">	
		<h2 class="sortDescription">Sort By: </h2>	
		<a class="sortButton" onclick="clickFunction()">Select</a>
	</section>	

	<section id="panel">
		<div class="panel container">

		  <div class="panel-box">
		  
			<div class="panel-item">	
        	<ul>
        		<li><input type="submit" name="ASC" value="By ID - Ascending"></li>
        		<li><input type="submit" name="DESC" value="By ID - Descending"></li>
				<li><input type="submit" name="titleASC" value="By Title - Ascending"></li>
				<li><input type="submit" name="titleDESC" value="By Title - Descending"></li>
        	</ul>
			</div>
		
		  </div>
		</div>
	</section>

 <div class="searchItem">
      <input type="text" name="valueToSearch" placeholder="Search Item">
     <input type="submit" name="search" value="Search">
    </div>

    <table id="customers" class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Calories</th>
            <th>Ingredients</th>
            <th>Image</th>
			<th>URL Recipes</th>
            <th>Action</th>

        </tr>

<?php
	while($row = mysqli_fetch_array($result)) {
		
		$id    = $row['id'];
        $name  = $row['name'];
        $calorie = $row['Calories'];
		$ingredient = $row['Ingredients'];
		$url = $row['urlRecipe'];
	?>
	
	  
        <tr>
            <td><?=$id; ?></td>
            <td><?=$name; ?></td>
            <td><?=$calorie; ?></td>
            <td><?=$ingredient; ?></td>
				
            <td>
            	<img src="./includes/imageView.php?image_id=<?php echo $row["id"]; ?>" class="thumbnail" width="100px" height="75px">
            </td>
			<td><?=$url; ?></td>
            <td><a href="update.php?update=<?php echo $id ?>" class="btn btn-success btn-sm" role="button">Update</a>
            <a href="admin.php?delete=<?php echo $id ?>" class="btn btn-danger btn-sm" id="delete" role="button">Delete</a></td>
        </tr>

	
<?php		
	}
	
	 if(isset($_GET['delete'])){	
        
        $id = $_GET['delete'];

        $image = "SELECT * FROM foodItem WHERE id = $id";
        
        $query1 = mysqli_query($conn,$image);

        while($row = mysqli_fetch_array($query1))
        {
           
        }

        $query = "DELETE FROM foodItem WHERE id = $id";
        
        $result = mysqli_query($conn,$query);
        if($result){
		
        }
    }    
  
?>
    </table>
	 <script type="text/javascript" src="./javascript/sortAdmin.js"></script>
</BODY>
</HTML>