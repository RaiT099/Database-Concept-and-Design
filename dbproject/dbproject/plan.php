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
	if(isset($_POST['Plan_A']) !="")
	{
		$stmt=$connect->prepare("INSERT INTO user_plan (Plan_ID, user_ID, start_accdate, end_accdate) values (?, ?, ?, ?)");
		$stmt->bind_param('siss', $Plan_ID, $user_ID, $start_accdate, $end_accdate);
		$Plan_ID = 'P1';
		$email=$_SESSION['email'];
		$user_ID=$_SESSION['user_id'];
		$start_accdate = date("d-m-y");
		$end_accdate = date('y-m-d', strtotime($start_accdate . "+1 month"));
		$stmt->execute();
		
		echo "<script> alert('Plan added')</script>";
		$stmt->close();
		$connect->close();
		header("location:payment.php");
	}
	else if(isset($_POST['Plan_B']) !="")
	{
		$stmt=$connect->prepare("INSERT INTO user_plan (Plan_ID, user_ID, start_accdate, end_accdate) values (?, ?, ?, ?)");
		$stmt->bind_param('siss', $Plan_ID, $user_ID, $start_accdate, $end_accdate);
		$Plan_ID = 'P2';
		$email=$_SESSION['email'];
		$user_ID=$_SESSION['user_id'];
		$start_accdate = date("d-m-y");
		$end_accdate = date('y-m-d', strtotime($start_accdate . "+1 month"));
		$stmt->execute();
		
		echo "<script> alert('Plan added')</script>";
		$stmt->close();
		$connect->close();
		header("location:payment_1.php");
	}
	else if(isset($_POST['free_trial']) !="")
	{
		$stmt=$connect->prepare("INSERT INTO user_plan (Plan_ID, user_ID, start_accdate, end_accdate) values (?, ?, ?, ?)");
		$stmt->bind_param('siss', $Plan_ID, $user_ID, $start_accdate, $end_accdate);
		$Plan_ID = 'P3';
		$email=$_SESSION['email'];
		$user_ID=$_SESSION['user_id'];
		$start_accdate = date("d-m-y");
		$end_accdate = date('y-m-d', strtotime($start_accdate . "+1 month"));
		$stmt->execute();
		
		echo "<script> alert('Plan added')</script>";
		$stmt->close();
		$connect->close();
		header("location:free_trial.php");
	}
	else
	{
		echo "Please select one plan";
	}
}
else
{
	echo "invalid";
}
?>