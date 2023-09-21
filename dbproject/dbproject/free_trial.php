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
<form action="ft_receipt.php" method="post">

Hey <?php echo $_SESSION['email'];?>!<br>
<br><br>
Your chosen plan is: <br>
Free Trial: RM0 for 360p One month access with One device. <br>
<br>
<br>
Please click "proceed"<br>
<br>
<input type="submit" name="submit" value="Proceed">

</form>
</body>
</html>