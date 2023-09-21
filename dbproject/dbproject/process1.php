<?php 


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



// add
if (isset($_POST['save'])) {
	$tvid = $_POST['tvid'];
	$tvname = $_POST['tvname'];
	$totalepisode = $_POST['totalepisode'];
	$episodeid = $_POST['episodeid'];
	$episodename = $_POST['episodename'];
	$episodenum = $_POST['episodenum'];
	$rating = $_POST['rating'];
	$duration = $_POST['duration'];
	

	if($tvid != '' && $tvname != '' && $episodeid != '' && $episodename != '' && $episodenum != '' && $rating != '' && $duration != ''){
		$mysqli->query("INSERT INTO tv_series (TV_ID, TV_Name, TV_TotalEpisodes) VALUES ('$tvid', '$tvname', '$totalepisode' )") or die($mysqli->error());
		$mysqli->query("INSERT INTO episode (Episode_ID, Episode_Name, Episode_Num, Episode_Rating, Episode_Duration, Tv_ID) VALUES ('$episodeid', '$episodename', '$episodenum', '$rating', '$duration', '$tvid' )") or die($mysqli->error());

	}
	if($tvid != '' && $tvname == '' && $episodeid != '' && $episodename != '' && $episodenum != '' && $rating != '' && $duration != ''){
		$mysqli->query("INSERT INTO episode (Episode_ID, Episode_Name, Episode_Num, Episode_Rating, Episode_Duration, Tv_ID) VALUES ('$episodeid', '$episodename', '$episodenum', '$rating', '$duration' ,  '$tvid')") or die($mysqli->error());


	}


	echo "<script>alert('Record is added')</script>";
	echo "<script>window.location='tvepisode.php'</script>";

}

// delete
if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM episode WHERE Episode_ID ='$id'") or die($mysqli->error());

	echo "<script>alert('Record is deleted')</script>";
	echo "<script>window.location='tvepisode.php'</script>";
}

// edit
if (isset($_GET['edit'])){
	
	$id=$_GET['edit'];
	$update=true;
	$result=$mysqli->query("SELECT * FROM episode LEFT JOIN tv_series USING (tv_id) where Episode_ID= '$id'") or die($mysqli->error());
	if (count($result)==1)
	{
		$row = $result->fetch_array();
		$tvid = $row['Tv_ID'];
		$tvname = $row['TV_Name'];
		$totalepisode = $row['TV_TotalEpisodes'];
		$episodeid = $row['Episode_ID'];
		$episodename = $row['Episode_Name'];
		$episodenum  = $row['Episode_Num'];
		$rating = $row['Episode_Rating'];
		$duration = $row['Episode_Duration'];
		

	}

}

// update
if (isset($_POST['update'])) {
	$tvid = $_POST['tvid'];
	$tvname = $_POST['tvname'];
	$totalepisode = $_POST['totalepisode'];
	$episodeid = $_POST['episodeid'];
	$episodename = $_POST['episodename'];
	$episodenum = $_POST['episodenum'];
	$rating = $_POST['rating'];
	$duration = $_POST['duration'];


	//$mysqli->query("UPDATE tv_series LEFT JOIN episode ON tv_series.TV_ID = episode.Tv_ID SET tv_series.TV_ID = '$tvid', tv_series.TV_Name = '$tvname', tv_series.TV_TotalEpisodes = '$totalepisode',Episode_ID = '$episodeid', episode.Episode_Name = '$episodename', episode.Episode_Num = '$episodenum', episode.Episode_Rating = '$rating', episode.Episode_Duration = '$duration' WHERE tv_series.TV_ID = '$tvid' AND episode.Episode_ID = '$episodeid'") or die($mysqli->error());	
	
	$mysqli->query("UPDATE tv_series SET TV_ID = '$tvid', TV_Name = '$tvname', TV_TotalEpisodes = '$totalepisode' WHERE TV_ID = '$tvid'") or die($mysqli->error());	

	$mysqli->query("UPDATE episode SET Episode_ID = '$episodeid', Episode_Name = '$episodename', Episode_Rating = '$rating', Episode_Num = '$episodenum', Episode_Duration = '$duration', Tv_ID = '$tvid'  WHERE Episode_ID = '$episodeid'") or die($mysqli->error());	

		
	echo "<script>alert('Record is updated')</script>";
	echo "<script>window.location='tvepisode.php'</script>";
}

?>