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

Welcome <?php echo $_SESSION['email'];?>!<br>
------------------------------------<br>
Our Plans: 
<table>
<tr>
<form action="plan.php" method="post">
<ul>
<input type="radio" name="free_trial" value="free_trial"/> <label for="free_trial">Free Trial: RM0.00 for 360p One Month Access with One Device<br></label>
<input type="radio" name="Plan_A" value="Plan_A"/> <label for="Plan_A">Plan A: RM17.00 for 360p with One Device Access<br></label>
<input type="radio" name="Plan_B" value="Plan_B"/> <label for="Plan_B">Plan B: RM39.00 for 480p with Multiple Device Access up to 3</label><br>
</ul>
<input type="submit" name="submit">
</form>
</tr>
</table>
</body>
</html>