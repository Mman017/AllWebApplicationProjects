<!--
@Author: Parnacio, Homard T. 
@Batuyong, Genesis L. 
@Date: 12/10/2020
@Version: 1.0
-->
<?php 
session_start();
if(!isset($_SESSION['usersId'])) {
    header('Location: index.php'); 
    return;
} 