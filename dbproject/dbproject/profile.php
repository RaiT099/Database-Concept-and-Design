<?php
 include('authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <title>Profile</title>
</head>

<body>
<header>
</header>
<div id="center">

<h1 align='center'>Welcome <?php echo $_SESSION['email']; ?>!</h1>
<div id="contentbox">
<?php
$sql="SELECT * FROM user WHERE user_id = $_SESSION['user_id']";
$result= mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">

<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">User ID:</div> </td>
<td class="tl-4"><?php echo $row['user_id']; ?></td>
</tr>

<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">First Name:</div></td>
<td class="tl-4"><?php echo $row['first_name']; ?></td>
</tr>

<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Last Name:</div></td>
<td class="tl-4"><?php echo $row['last_name']; ?></td>
</tr>

<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email:</div></td>
<td class="tl-4"><?php echo $row['email']; ?></td>
</tr>
</table>

</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logged_page.php" id="st-btn">Back</a></div>
<div id="st"><a href="deleteac.php" id="st-btn">Edit Profile</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>
</body>
</html>