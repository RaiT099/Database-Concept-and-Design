<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbname";

$conn = mysqli_connect($servername, $username, $password, "$dbname");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>User Login</title>
	<link rel="stylesheet" href="style2.css"/>
	<h2>TMFlix</h2>
	
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if(isset($_POST['email'])){
			$email = $_POST['email'];
			$password = $_POST['password'];

		 $sql = "SELECT * FROM user_1 WHERE email = '$email' AND password = '$password'";
		 $result = mysqli_query($conn,$sql);
		 $row = mysqli_fetch_array($result);
		

		if(is_array($row)){
			
			$_SESSION["email"] = $row['email'];
			$_SESSION["password"] = $row['password'];
			$_SESSION["user_id"] = $row['User_ID'];
			

		} else {
		
			//echo '<script type="text/javascript">';
			echo 'alert("Invalid ID or Password")';
			echo'window.location.href = "login.php" ';

			echo "<script>alert('Invalid ID or Password')</script>";
			echo "<script>window.location='login.php'</script>";
		}
		if(isset($_SESSION["user_id"])){
			header("Location:loggedpage.php");
		}
		
	}
 else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">User Login</h1>
        <input type="text" class="login-input" name="email" placeholder="Email" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
		<p class="link"><a href="adminlogin.php">Admin Login</a></p>
  </form>
<?php
    }
?>
</body>
</html>