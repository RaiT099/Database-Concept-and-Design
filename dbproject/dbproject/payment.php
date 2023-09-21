<?php
session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:login.php");
	exit();
}
?>

<html>
<body>
<form action="receipt.php" method="post">

Hey <?php echo $_SESSION['email'];?>!<br>
<br><br>
Your chosen plan is: <br>
Plan A: RM17 for 360p with One device access. <br>
<br>
<br>
Please click "proceed" to make payment<br>
<br>
<input type="submit" name="submit" value="Proceed">

</form>
</body>
</html>