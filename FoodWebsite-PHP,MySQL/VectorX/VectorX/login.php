<!--
@Author: Batuyong, Genesis
@Date: 12/14/2020
@Version: 1.0
-->
<?php
include_once './includes/header.php';
?>	

 <section id="register">
   <div class="register container">
   <div class="card-box">
    <form action="includes/login.inc.php" method="post">
	<ul class="menu">
	   <h2>LOG-IN</h2>
         <li><input type="text" name="user_name" class="usName" placeholder="Username..."></li>
         <li><input type="password" name="pwd" placeholder="Password..."></li>
         <li><button type="submit" name="submit">Log-in</button></li>
	</ul>
    </form>
    <?php
    /*if the user input is incorrect it shows appropriate error message */
    if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p> Fill in all fields</p>";
    } else if ($_GET["error"] == "loginerror") {
      echo "<p> Wrong Username or Password.</p>";
      } else if($_GET["error"] == "wronglogin") {
        echo "<p> Incorrect Login.</p>";
      }
    }
    ?>
	</div>
</div>
</section>

<?php include_once './includes/footer.php'; ?> 