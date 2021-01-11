<!--
@Author: Molines, Emmanuel D.
@Date: 11/30/2020
@Version: 1.0
-->

<?php

require_once './includes/db.php';
include 'includes/require_session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">	
 <link rel="stylesheet" type="text/css" href="./style/Adminstyle.php">
  <title>VectorX</title>
  
</head>
	<body>

	  <form action="adminAccount.php" method="post">
	  
		  <!-- Header Navigation Bar -->
			<div class="navbar">
			<header>
				<nav>
					<ul class="menu">
						<li><img src="./image/logo.png" alt="Vector X logo"></li>

						<li><a href="admin.php">FOOD ITEMS</a></li>
						<li><a href="adminAccount.php">VIEW ADMIN ACCOUNTS</a></li>
						<li id="contactUs"><a href="index.php" role="button" class="btn btn-primary pull-right">HOME</a></li>
					</ul>
				</nav>
			 </header>
			 	<br></br>
			</div>
			  <!-- End of Header Navigation Bar -->	



		<div class="container">



			<div class="searchItem">
			  <input type="text" name="valueToSearch" placeholder="Search user">
			 <input type="submit" name="search" value="Search">
			</div>
			
		
			<table id="customers" class="table table-hover table-striped">
				<tr>
					<th>UserID</th>
					<th>FirstName</th>
					<th>LastName</th>
					<th>Username</th>
					<th>Password</th>
				</tr>
		<?php  		            
				
		if(isset($_POST['search']))
		{
			$valueToSearch = $_POST['valueToSearch'];

			$query = "SELECT * FROM `users` WHERE CONCAT(`usersId`, `usersFirstName`, `usersLastName`, `usersName`) LIKE '%".$valueToSearch."%'";
			$result = mysqli_query($conn,$query);
			
		}
		 else {
			$query = "SELECT * FROM `users`";
			$result = mysqli_query($conn,$query);
		}
				
				

		if(mysqli_num_rows($result) > 0){
			
			while($row = mysqli_fetch_array($result)){
				
				$id    = $row['usersId'];	
				$name  = $row['usersFirstName'];
				$email = $row['usersLastName'];
				$batch = $row['usersName'];
				$image = $row['usersPwd'];

		?>
				
				<tr>
					<td><?=$id; ?></td>
					<td><?=$name; ?></td>
					<td><?=$email; ?></td>
					<td><?=$batch; ?></td>
					<td><?=$image; ?></td>
				</tr>
		<?php
			}
		}  
				
			if(isset($_GET['delete'])){
				
				$id = $_GET['delete'];

				$image = "SELECT * FROM student WHERE id = $id";
				
				$query1 = mysqli_query($conn,$image);

				while($row = mysqli_fetch_array($query1))
				{
					 $img= $row['image'];
				}

					unlink("upload/".$img);

				$query = "DELETE FROM student WHERE id = $id";
				
				$result = mysqli_query($conn,$query);
				
				if($result){

					header('location:usersAccount.php');
					
				}
			}    
				 
		?>

			</table>
		</div>
		  
		  
	 </form>
			  
    </body>
</html>



