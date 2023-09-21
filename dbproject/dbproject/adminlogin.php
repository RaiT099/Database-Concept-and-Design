<?php
	session_start();
	$conn= mysqli_connect("localhost", "root", "", "dbname");
	if ($conn-> connect_error)
	{
		die("Connection failed:" . $conn-> connect_error);
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body{
			text-align: center;
		}

		.field{
			margin-bottom: 20px;
		}

	</style>
</head>
<tbody>
	
	<h2>Admin Login</h2>
	<div>
		<form action="" method="post">
			<input type="text" name="ID" placeholder="Admin" class="field" id="admin_id"><br>
			<input type="password" name="Password" placeholder="Password" class="field" id="password"><br>
			<div><a href="login.php"><span>User Login</span></a></div>
			<input type="submit" class="field" name="Login" value="Login" id="Login">
			
		</form>

	</div>

	<?php
		if(isset($_POST['Login'])){
			$Admin = $_POST['ID'];
			$PASS = $_POST['Password'];

		 $sql = "SELECT * FROM admin WHERE admin_id = '$Admin' AND password = '$PASS'";
		 $result = mysqli_query($conn,$sql);
		 $row = mysqli_fetch_array($result);
		

		if(is_array($row)){
			
			$_SESSION["ID"] = $row['admin_id'];
			$_SESSION["FName"] = $row['first_name'];
			$_SESSION["LName"] = $row['last_name'];
			

		} else {
		
			

			echo "<script>alert('Invalid ID or Password')</script>";
			echo "<script>window.location='adminlogin.php'</script>";
		}
		if(isset($_SESSION["ID"])){
			header("Location:report.php");
		}
		
	}

	?>
</tbody>
</html>
























