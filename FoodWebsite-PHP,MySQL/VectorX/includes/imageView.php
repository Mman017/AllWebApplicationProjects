<?php
   require_once 'db.php';
   
   
    if(isset($_GET['image_id'])) {
        $sql = "SELECT * FROM foodItem WHERE id=" . $_GET['image_id'];
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Something went wrong in retrieving the data<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["imageType"]);
        echo $row["imageData"];
	}
	mysqli_close($conn);
?>