<?php
session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:login.php");
	exit();
}
$connect = mysqli_connect("localhost", "root", "", "dbname");

if(isset($_POST['submit']))
{
	$stmt=$connect->prepare("INSERT INTO payment (Payment_ID, User_ID, Amount, Pay_Date) values (?, ?, ?, ?) ");
	$stmt->bind_param('iiss', $Payment_ID, $User_ID, $Amount, $Pay_Date);
	$email = $_SESSION['email'];
	$User_ID=$_SESSION['user_id'];
	$Payment_ID = mysqli_insert_id($connect);
	$Amount = 39.00;
	$Pay_Date = date("d-m-y");
	$stmt->execute();
	
	echo "Here is ur receipt<br>";
	echo "----------------------------------<br>";
	echo "Payment ID: ". mysqli_insert_id($connect);
	echo "<br>";
	echo "Email: $email <br> " ;
	echo "Amount paid: RM$Amount.00 <br> "; 
	echo "Date: $Pay_Date <br>";
	echo "----------------------------------<br>";
	echo "<br><br>";
	echo "Thanks for support TMFlix!<br>";
	$stmt->close();
	$connect->close();
}
else
{
	echo "Please click proceed";
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

</style>
</head>
<body>
<a href="loggedpage.php" class="previous">&laquo; Back to Home</a>
</body>
</html>