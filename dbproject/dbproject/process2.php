<?php 

session_start();



$host = "localhost";
$name = "root";
$pass = "";
$db = "dbname";


$mysqli = new mysqli($host, $name,$pass, $db) or die(mysqli_error($con));

$update = false;
$tvid = '';
$tvname = '';
$totalepisode = "";
$episodeid = '';
$episodename = '';
$episodenum = '';
$rating = '';
$duration = '';

if (isset($_GET['edit'])){
	
	$id=$_GET['edit'];
	$user_ID=$_SESSION['user_id'];
	$result=$mysqli->query("SELECT * FROM episode  where Episode_ID= '$id'") or die($mysqli->error());
	if (count($result)==1)
	{
		$row = $result->fetch_array();
		$tvid = $row['Tv_ID'];
		echo "	$tvid";
		echo "$user_ID";
		$mysqli->query("INSERT INTO tv_user (tv_id, user_id) VALUES ('$tvid', '$user_ID')")or die($mysqli->error());
	}
	//$mysqli->query("INSERT INTO tv_user (tv_id, user_id) VALUES ('$tvid', '$user_ID')")or die($mysqli->error());

}

	echo "<script>alert('TV Watched')</script>";
	echo "<script>window.location='loggedpage.php'</script>";
?>