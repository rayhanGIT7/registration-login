<?php 
 
  $host_name="localhost";
  $User_Name ="root";
  $DB_Password="";
  $DB_Name="test";

  $database_connect=mysqli_connect($host_name,$User_Name,$DB_Password,$DB_Name);

  if ($database_connect==false) {
    echo "Error database not cunnected!";
}
?>