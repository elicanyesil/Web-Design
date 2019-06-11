<html>
<head></head>
<body> 
<?php
     
	$user = $_POST['name'];
	$pass = $_POST['pass'];


   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $db = "register";
   $conn =  mysqli_connect($dbhost, $dbuser, $dbpass,$db);
  
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   $mysqli = "SELECT * FROM users2 WHERE `Password` ='$pass' AND `Username` ='$user'";  

    $result = mysqli_query($conn, $mysqli  ); 
	
	if(mysqli_num_rows($result) > 0) {
		
		echo("LOGIN SUCCESSFUL!");
		echo'<img src="pictures/s.jpg" alt="a" align="middle" width="20%" height="35%" hspace="50">';
	}else{
		echo("LOGIN FAILED");
		echo'<img src="pictures/d.png" alt="a" align="middle" width="20%" height="35%" hspace="50">';
	}


?>
</body>
</html>