<?php
       include 'db_cunnect.php';
    	setcookie("currentUser", $aurthentication,time()-(86400*50));
    	header("location:login-page.php");
?>
 