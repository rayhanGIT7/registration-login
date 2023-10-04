<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'db_cunnect.php'; 


$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$pwd=$_REQUEST["pwd"];
$encyeppwd=md5(sha1($pwd));
$aurhToken=md5(sha1($pwd.$email));

$insatQuery="INSERT INTO singup(name, email, Password, auth) VALUES ('$name','$email','$encyeppwd','$aurhToken')";

$runQuery=mysqli_query($database_connect,$insatQuery);

if ($runQuery==true) {
	header("location:registation.php?reg_done=Registration Succesfully !!");
}

?>
</body>
</html>