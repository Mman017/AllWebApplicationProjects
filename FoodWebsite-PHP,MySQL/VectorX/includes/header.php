<!--
@Author: Batuyong, Genesis
@Date: 12/14/2020
@Version: 1.0
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./style/style.php">
 
  <title>VectorX</title>
</head>
<body>
   <!-- <form action="index.php" method="post"> -->
  <!-- Header Navigation Bar -->
  	<div class="navbar">
 	<header>
 		<nav>
        	<ul class="menu">
            <li><img src="./image/logo.png" alt="Vector X logo"></li>
            <!-- <li id="adminLogin"> <a href="login.php" role="button" class="btn btn-primary pull-right">LOGIN AS ADMIN</a></li> -->
            <?php
            if (isset($_SESSION["usersId"])) {
              echo "<li><a href='admin.php'>FOOD ITEMS</a></li>";
              echo "<li><a href='adminAccount.php'>VIEW ADMIN ACCOUNTS</a></li>";
              echo "<li><a href='includes/logout.inc.php'>LOG OUT</a></li>";
            } else {
			  echo "<li><a href='index.php'>HOME</a></li>";	
              echo "<li><a href='signup.php'>ADMIN SIGN UP</a></li>";
              echo "<li><a href='login.php'>ADMIN LOG-IN</a></li>";
            }
            ?>
        	</ul>
		</nav>
	 </header>
	</div>
   <!-- End of Header Navigation Bar -->
   

   </head>
   </body>
   
     <!--Javascript -->
  
    <script type="text/indexscript" src="maine.js"></script>
     <!-- -->