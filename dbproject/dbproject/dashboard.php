<?php
//include auth_session.php file on all user panel pages
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<body>
<div class="form">
        <p>Hey, <?php echo $_SESSION['email']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
</div>
Welcome to TMFlix<br>
------------------------------------<br>
Our Plans: 
<table>
<tr>
<ul>
<input type="radio" name="Plan_A" value="Plan A"/> <label for="PlanA">Plan A: RM17.00 for 360p with One Device Access<br></label>
<input type="radio" name="Plan_B" value="Plan B"/> <label for="PlanB">Plan B: RM39.00 for 480p with Multiple Device Access up to 3</label><br>
</ul>
<input type="submit" name="submit">
</tr>

</body>
</html>
