<?php 
$conn = mysqli_connect("localhost", "root", "", "vectorx");
function escape($string)
{
    global $conn;    
    return mysqli_real_escape_string($conn,$string);
}

function clean($string)
{
	$string = trim($string);
	$string = stripcslashes($string);
	$string = htmlentities($string);

	return $string;
}

?>