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
    <form action="includes/signup.inc.php" method="post">
	   <ul class="menu">
	     <h2>SIGN-UP</h2>
         <li> <input type="text" name="user_name" placeholder="Username..."></li>
         <li> <input type="text" name="first_name" placeholder="First Name..."></li>
         <li> <input type="text" name="last_name" placeholder="Last Name..."></li>
         <li> <input type="password" name="pwd" placeholder="Password..."></li>
         <li> <input type="password" name="pwd_repeat" placeholder="Repeat Password..."></li>
        <button class="registerSubmit" type="submit" name="submit">Sign Up</button>
		</ul>
    </form>
    <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p class='signUpErromessage'> Fill in all fields</p>";
    } else if ($_GET["error"] == "passworderror") {
      echo "<p class='signUpErromessage'> Password does not match</p>";
    } else if ($_GET["error"] == "usernametaken") {
      echo "<p class='signUpErromessage'> User name already taken</p>";
    }else if ($_GET["error"] == "none") {
      echo "<p class='signUpmessage'>You have successfully signed up</p>";
    }
  }
?> 
</div>
</div>
</section>

<?php include_once './includes/footer.php'; ?> 