<?php
  if (isset($_COOKIE['currentUser'])) {
      header("location:profile.php");
  }

?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>HOME_PAGE</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <style type="text/css">


</style>
</head>
<body>
    <?php 
     include 'header.php';

    ?>
    <center><h1>LOGIN FORM</h1></center>
   <div class="login">
   
        <center> 
             <form method="post" action="login_core.php">
                  <label>Enter the User Email</label><br>
                  <input type="email" name="email" ><br><br>
                  <label>Enter the User Password</label><br>
                  <input type="password" name="pwd"><br><br>
                  <input type="submit" name="submit" value="SUBMIT">
             </form><br>
             <?php 
                      if(isset($_REQUEST['wrong-info'])){
                         echo  '<b style="color:red"> Email And Password are Invalid!</b>';
                      }
             ?>
        </div>
        </center>
  <?php include 'footer.php';?>
   
</body>
</html>