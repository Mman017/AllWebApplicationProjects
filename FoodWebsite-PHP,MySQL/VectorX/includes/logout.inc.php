<!--
@Author: Batuyong, Genesis
@Date: 12/14/2020
@Version: 1.0
-->
<?php
session_start();
session_unset();
session_destroy();

header("location: ../index.php");
exit();