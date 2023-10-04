<?php 
  include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>ragistation</title>
	<style type="text/css">
		.form{
        width: 400px;
        margin: auto;
        background-color: #ddd;
        padding: 10px;
       border:5px solid red;
    text-align: center;
    }
    .form input{
        padding: 10px;
        width:300px;
        font-size: 10px;
    }
    .form label{
        font-size:20px;
    }
    .form input value{
        font-size: 10px;
    }
    .form placeholder{
    	font-size: 10px
    }
    h1{
    	text-align: center;
    }
	</style>
</head>
<body>
    

	<h1>REGISTATION HARE</h1>
      <center> <?php 
       if (isset($_REQUEST["reg_done"])) {
       echo "REGISTATION SUCCESSFULL !"; 
       
     }
    ?></center> 
	<div class="form">
	
	<form action="regi_core.php" method="post">
     <input type="text" name="name" placeholder="Enter your name"><br><br>
     <input type="email" name="email" placeholder="Enter Your email"><br><br>
     <input type="password" name="pwd" placeholder="enter the password"><br><br>

     <input type="submit" name="submit" value="singup">

</form>
</div>
     <?php 
 include 'footer.php';
?>
</body>
</html>