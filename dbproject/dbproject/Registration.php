<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
	<link rel="stylesheet" href="style1.css"/>
	<p>WELCOME TO TMFlix</p>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])) {
        // removes backslashes
        //escapes special characters in a string
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
		$first_name = stripslashes($_REQUEST['first_name']);
        $first_name = mysqli_real_escape_string($con, $first_name);
		$last_name = stripslashes($_REQUEST['last_name']);
        $last_name = mysqli_real_escape_string($con, $last_name);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `user_1` (email, first_name, last_name, password)
                     VALUES ('$email','$first_name','$last_name','$password')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You have registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='Registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="email" placeholder="Email Address">
		<input type="text" class="login-input" name="first_name" placeholder="First Name">
		<input type="text" class="login-input" name="last_name" placeholder="Last Name">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>