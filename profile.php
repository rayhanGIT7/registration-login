
<?php
include 'db_cunnect.php';
  if (!isset($_COOKIE['currentUser'])) {
       header("location:home.php");
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 <?php  include 'header.php';?>
  <h1>Hello boys</h1>

    <div class="content">
            
     <?php 
      if (isset($_COOKIE['currentUser'])) {
      $target_user= $_COOKIE['currentUser'];

      $target_query="SELECT * FROM singup WHERE auth='$target_user'";
      $run_query=mysqli_query($database_connect, $target_query);

      if ($run_query ==true) { 
      while($get_row =mysqli_fetch_assoc($run_query)) { 
 
           
           echo "hello";
       // echo $get_row=["name"];
      // echo"User Phone Number:".$get_row=['numbers'];

      //   $avaters=$get_row["avater"];
      //   echo"<img src='../practice_PHP/avater/$avaters/' alt=''>";
                              
                        
                      
              }}  } 
              ?>
            
            <h1>Web Design &  Development Course</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque
                 expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus
                <br> a quae totam ipsa illum minus laudantium?</br>
              </div>
              

   <?php include 'footer.php';?>
</body>
</html>