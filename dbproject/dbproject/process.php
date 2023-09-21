<?php 


$host = "localhost";
$name = "root";
$pass = "";
$db = "dbname";


$mysqli = new mysqli($host, $name,$pass, $db) or die(mysqli_error($con));

$update = false;
$tvid = '';
$tvname = '';
$totalepisode = '';
$awardid = '';
$awardname = '';
$nawardid = '';
$directorid = '';
$directorname = '';
$ndirectorid = '';
$actorid = '';
$actorname = '';
$nactorid = '';
$genreid = '';
$genrename = '';
$ngenreid = '';


// add
if (isset($_POST['save'])) {
	$tvid = $_POST['tvid'];
	$tvname = $_POST['tvname'];
	$totalepisode = $_POST['totalepisode'];
	$awardid = $_POST['awardid'];
	$awardname = $_POST['awardname'];
	$directorid = $_POST['directorid'];
	$directorname = $_POST['directorname'];
	$actorid = $_POST['actorid'];
	$actorname = $_POST['actorname'];
	$genreid = $_POST['genreid'];
	$genrename = $_POST['genrename'];

	if($tvid != '' && $tvname != '' && $totalepisode != ''){
		$mysqli->query("INSERT INTO tv_series (TV_ID, TV_Name, TV_TotalEpisodes) VALUES ('$tvid', '$tvname', '$totalepisode' )") or die($mysqli->error());
	}
	if($awardid != '' && $awardname != '')
	{
		$mysqli->query("INSERT INTO award (Award_ID, Award_Name) VALUES('$awardid', '$awardname')")or die($mysqli->error());
	}
	if($directorid != '' && $directorname != ''){
		$mysqli->query("INSERT INTO director (Director_ID, Director_Name) VALUES('$directorid', '$directorname')")or die($mysqli->error());
	}
	if($actorid != '' && $actorname != ''){
		$mysqli->query("INSERT INTO actor (Actor_ID, Actor_Name) VALUES('$actorid', '$actorname')")or die($mysqli->error());
	}
	if($genreid != '' && $genrename != ''){
		$mysqli->query("INSERT INTO genre (Genre_ID, Genre_Name) VALUES('$genreid', '$genrename')")or die($mysqli->error());
	}
	if($tvid != '' && $awardid != ''){
		$mysqli->query("INSERT INTO tv_award (Award_ID, TV_ID) VALUES('$awardid', '$tvid')")or die($mysqli->error());
	}
	if($tvid != '' && $directorid != ''){
		$mysqli->query("INSERT INTO tv_director (Director_ID, TV_ID) VALUES('$directorid', '$tvid')")or die($mysqli->error());
	}
	if($tvid != '' && $actorid != ''){
		$mysqli->query("INSERT INTO tv_actor (Actor_ID, TV_ID) VALUES('$actorid', '$tvid')")or die($mysqli->error());
	}
	if($tvid != '' && $genreid != ''){
		$mysqli->query("INSERT INTO genre_tv (Genre_ID, TV_ID) VALUES('$genreid', '$tvid')")or die($mysqli->error());
	}

	echo "<script>alert('Record is added')</script>";
	echo "<script>window.location='edit.php'</script>";

}

// delete
if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE tv_award, award FROM tv_award LEFT JOIN award ON tv_award.award_id = award.award_id WHERE tv_id='$id'") or die($mysqli->error());
	$mysqli->query("DELETE FROM episode WHERE tv_id='$id'") or die($mysqli->error());
	$mysqli->query("DELETE FROM tv_director WHERE tv_id='$id'") or die($mysqli->error());
	$mysqli->query("DELETE FROM tv_actor WHERE tv_id='$id'") or die($mysqli->error());
	$mysqli->query("DELETE FROM genre_tv WHERE tv_id='$id'") or die($mysqli->error());
	$mysqli->query("DELETE FROM tv_series where TV_ID='$id'") or die($mysqli->error());

	echo "<script>alert('Record is delete')</script>";
	echo "<script>window.location='tvseries.php'</script>";
}

// update
if (isset($_POST['update'])) {
	$tvid = $_POST['tvid'];
	$tvname = $_POST['tvname'];
	$totalepisode = $_POST['totalepisode'];
	$awardid = $_POST['awardid'];
	$awardname = $_POST['awardname'];
	$nawardid = $_POST['nawardid'];
	$directorid = $_POST['directorid'];
	$directorname = $_POST['directorname'];
	$ndirectorid = $_POST['ndirectorid'];
	$actorid = $_POST['actorid'];
	$actorname = $_POST['actorname'];
	$nactorid = $_POST['nactorid'];
	$genreid = $_POST['genreid'];
	$genrename = $_POST['genrename'];
	$ngenreid = $_POST['ngenreid'];

	if($tvid != '' && $tvname != '' && $totalepisode != ''){
		$mysqli->query("UPDATE tv_series SET TV_ID = '$tvid', TV_Name = '$tvname', TV_TotalEpisodes = '$totalepisode' WHERE TV_ID = '$tvid'") or die($mysqli->error());
	}
	if($awardid != '' && $awardname != '')
	{
		$mysqli->query("UPDATE award SET Award_ID = '$awardid', Award_Name = '$awardname'  WHERE Award_ID = '$awardid'")or die($mysqli->error());
	}
	if($directorid != '' && $directorname != ''){
		$mysqli->query("UPDATE director SET Director_ID = '$directorid', Director_Name = '$directorname' WHERE Director_ID = '$directorid'")or die($mysqli->error());
	}
	if($actorid != '' && $actorname != ''){
		$mysqli->query("UPDATE actor SET Actor_ID = '$actorid', Actor_Name = '$actorname' WHERE Actor_ID = '$actorid'")or die($mysqli->error());
	}
	if($genreid != '' && $genrename != ''){
		$mysqli->query("UPDATE genre SET Genre_ID = '$genreid', Genre_name = '$genrename' WHERE Genre_ID = '$genreid'")or die($mysqli->error());
	}
	if($tvid != '' && $awardid != '' && $nawardid == ''){
		$mysqli->query("INSERT INTO tv_award (Award_ID, TV_ID) VALUES('$awardid', '$tvid')")or die($mysqli->error());
	}
	if($tvid != '' && $directorid != '' && $ndirectorid == ''){
		$mysqli->query("INSERT INTO tv_director (Director_ID, TV_ID) VALUES('$directorid', '$tvid')")or die($mysqli->error());
	}
	if($tvid != '' && $actorid != '' && $nactorid == ''){
		$mysqli->query("INSERT INTO tv_actor (Actor_ID, TV_ID) VALUES('$actorid', '$tvid')")or die($mysqli->error());
	}
	if($tvid != '' && $genreid != '' && $genreid == ''){
		$mysqli->query("INSERT INTO genre_tv (Genre_ID, TV_ID) VALUES('$genreid', '$tvid')")or die($mysqli->error());
	}
	if($tvid != '' && $awardid != '' && $nawardid != ''){
		$mysqli->query("UPDATE tv_award SET Award_ID = '$nawardid', TV_ID = '$tvid'  WHERE Award_ID = '$awardid' AND TV_ID = '$tvid'")or die($mysqli->error());
	}
	if($tvid != '' && $directorid != '' && $ndirectorid != ''){
		$mysqli->query("UPDATE tv_director SET Director_ID = '$ndirectorid', TV_ID = '$tvid'  WHERE  Director_ID = '$directorid' AND TV_ID = '$tvid'")or die($mysqli->error());
	}
	if($tvid != '' && $actorid != '' && $nactorid != ''){
		$mysqli->query("UPDATE tv_actor SET Actor_ID = '$nactorid', TV_ID = '$tvid'  WHERE  Actor_ID = '$actorid' AND TV_ID = '$tvid'")or die($mysqli->error());
	}
	if($tvid != '' && $genreid != '' && $genreid != ''){
		$mysqli->query("UPDATE genre_tv SET Genre_ID = '$ngenreid', TV_ID = '$tvid'  WHERE  Genre_ID = '$genreid' AND TV_ID = '$tvid'")or die($mysqli->error());
	}



	echo "<script>alert('Record is Edited')</script>";
	echo "<script>window.location='tvseries.php'</script>";
}

?> 