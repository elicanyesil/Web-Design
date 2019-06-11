
<html>
<head></head>
<body> 
<?php
     
	  
	
	$user = $_POST['register_username'];
	$password = $_POST['register_password'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$adress = $_POST['adress'];
	


   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $db = "register";
   $conn =  mysqli_connect($dbhost, $dbuser, $dbpass,$db);
  
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   $mysqli = "INSERT INTO `users2` (`FullName`, `Username`, `Password`, `E-mail`, `Adress`) VALUES ( '$fullname', '$user', '$password', '$email', '$adress');";
    mysqli_query($conn, $mysqli  ); 


?>
</body>
</html>