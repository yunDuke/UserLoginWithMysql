<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="static/login.css" />
<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="jquery-1.7.min.js"></script>
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username']; 
		$email = $_POST['email'];
           $carplate = $_POST['carplate'];
        $password = $_POST['password'];
       $cartype = $_POST['cartype'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);

             
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);

               

		$password = stripslashes($password);
 		$password = mysql_real_escape_string($password);

                 $trn_date = date("Y-m-d H:i:s");
              
		
        $query = "INSERT into `users` (username, password, carplate, cartype, email, trn_date) VALUES ('$username', '".md5($password)."','$carplate','$cartype', '$email', '$trn_date')";
        $result = mysql_query($query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="lg-container">
<h1>Registration</h1>
<form action="" id="lg-form" name="lg-form" method="post">
<p>username</p>
<input type="text" name="username" placeholder="Username" required />
<p>carplate</p>
<input type="text" name="carplate" placeholder="carplate" required />
<p>email</p>
<input type="email" name="email" placeholder="Email" required />
<p>cartype</p>
<input type="text" name="cartype" placeholder="cartype" required />
<p>password</p>
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
