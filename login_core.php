
<?php 
 
include 'db_cunnect.php';

   $email=$_REQUEST['email'];
   $pwd=$_REQUEST['pwd'];
  
   $aurthentication=md5(sha1($pwd.$email));

   $macth_query="SELECT * FROM singup WHERE auth='$aurthentication'";

   $run_query=mysqli_query($database_connect, $macth_query);


    $count=mysqli_num_rows($run_query);

     if ($run_query==true) {
      
     if ( $count===1) {
      
      setcookie("currentUser", $aurthentication,time()+(86400*7));
   	  header("location:profile.php");
   }
   else{
        // echo "Email And Password are Invalid!";
   	   	header("location:login-page.php?wrong-info");
   
   }
}
  
?>