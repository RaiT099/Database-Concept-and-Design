<?php
	session_start();
	$conn= mysqli_connect("localhost", "root", "", "dbname");
	if ($conn-> connect_error)
	{
		die("Connection failed:" . $conn-> connect_error);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		:root {
			--main-color: #027581;
			--color-dark: #1d2231;
			--text-grey: #8390a2;
		}

		*{
			font-family: 'Poppins', sans-serif;
			margin: 0;
			padding: 0;
			text-decoration: none;
			list-style-type: none;
			box-sizing: border-box;
		}

		#sidebar-toggle {
			display: none;
		}


		.sidebar {
			height: 100%;
			width: 240px;
			position: fixed;
			left: 0;
			top: 0;
			z-index: 100;
			background: var(--main-color);
			color: #fff;
			overflow-y: auto;
		}

		.sidebar-header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			height: 60px;
			padding: 0rem 1rem;
		}

		.sidebar-menu {
			padding: 1rem;
		}

		.sidebar li {
			margin-bottom: 1.2rem;
		}

		.sidebar a {
			color: #fff;
			font-size: .9rem;
		}

		.main-content {
			position: relative;
			margin-left: 240px;
		}

		header {
			position: fixed;
			left: 240px;
			top: 0;
			z-index: 100;
			width: 100%;
			background: #fff;
			height: 60px;
			padding: 0rem 1rem;
			display: flex;
			align-items: center;
			justify-content: space-between;
			border-bottom: 1px solid var(--text-grey);
		}


		main {
			margin-top: 60px;
			background: #f1f5f9;
			min-height: 90vh;
			padding: 1rem 2rem;
		}

		.dash-title {
			color: var(--color-dark);
			margin-bottom: 1rem;
			margin-top: 1rem;
			margin-left: 2rem;
		}

		.dash-cards {
			display: grid;
			grid-template-columns: repeat(5,1fr);
			grid-column-gap: 7px;
		}

		.card-single {
			background: #fff;
			border-radius: 7px;
			box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
			margin-bottom: 1rem;
		}

		.card-body {
			padding: 1.3rem 1rem;
			display: flex;
			align-items: center;
		}

		.card-body span {
			font-size: 1.7rem;
			color: #777;
			padding-right: 1rem;
		}

		.card-body h5 {
			color: var(--text-grey);
			font-size: 1rem;
		}

		.card-body h4 {
			color: var(--color-dark);
			font-size: 1.1rem;
			margin-top: .2rem;
		}

		.card-footer {
			padding: .2rem 1rem;
			background: #f9fafc;
		}

		.card-footer a {
			color: var(--main-color);
		}

		.recent {
			margin-top: 3rem;
			margin-bottom: 3rem;
		}

		.activity-grid {
			display: grid;
			grid-template-columns: 100%;
			grid-column-gap: 1.5rem;
		}

		.activity-card {
			background: #fff;
			border-radius: 7px;
		}

		.activity-card h3 {
			color: var(--text-grey);
			margin: 1rem;
		}

		.activity-card table {
			width: 100%;
			border-collapse: collapse;
		}

		.activity-card thead {
			background: #efefef;
			text-align: left;
		}

		th,td {
			font-size: .9rem;
			padding: 1rem .5rem;
			color: var(--color-dark);
		}

		td {
			font-size: .8rem;

		}

		tbody tr:nth-child(even) {
			background: #f9fafc;
		}

		.badge {
			padding: .5rem 1rem;
			border-radius: 8px;
			font-weight: 700;
			border: none;
		}

		.badge.btn-info {
			background: #DEF7EC;
			color: var(--main-color);
		}

		.badges{
			padding: .5rem 1rem;
			border-radius: 8px;
			font-weight: 700;
			border: none;
		}

		.badges.add {
			background: #DEF7EC;
			color: var(--main-color);
		}

		.position{
			padding-left: 89%;
		}

		
		input{
			width: 100%;
			padding: 10px;
		}
		


	</style>
</head>


<body>

	<?php require_once 'process.php'; ?>
	<input type="checkbox" id="sidebar-toggle">
	 <div class="sidebar">
	 	<div class="sidebar-header">
	 		<h3 class="brand">
	 			<span class="ti-unlink"></span>
	 			<span>Admin page</span>
	 		</h3>
	 		<label for="sidebar-toggle" class="ti-menu-alt"></label>
	 	</div>

		 <div class="sidebar-menu">
		 	<ul>
		 		<h4><br><br><br></h4>
				<h4>Admin ID : <?php echo $_SESSION["ID"];?></h4>
				<h4>Admin Name: <?php echo $_SESSION["LName"] ." ". $_SESSION["FName"] ;?></h4>
				<li><br><br></li>
		 		<li>
		 			<a href="report.php">
		 				<span>Report</span>
		 			</a>
		 		</li>
		 		<li>
		 			<a href="tvseries.php">
		 				<span>TV Series</span>
		 			</a>
		 		</li>
		 		<li>
		 			<a href="tvepisode.php">
		 				<span>TV Episode</span>
		 			</a>
		 		</li>
		 		<li>
		 			<a href="logout.php">
		 				<span>Logout</span>
		 			</a>
		 		</li>
		 	</ul>
		 </div>
	 </div>

 		<div class="main-content">
 			<header><h2 class="dash-title">Edit TV Series Data</h2></header>

	 	<main>
	 		<div>
	 			<h2 class="dash-title">References</h2>
				<a href="#add" class="position">
					<span class="badges add">Add/Edit</span>
					<h4><br></h4>
				</a>
			</div>
	 		<div class="dash-cards">
	 				<div class="card-single">
	 					<div class="card-body">
	 						
		 					<div>
		 						<h5>Series</h5>
		 					
		 						<h4>
		 							<section class="recent">
						 				<div class="activity-grid">
							 				<div class="activity-card">
							 					<table>
							 						<thead>
							 							<tr>
							 								<th>TV ID</th>
							 								<th>TV Name</th>
							 							</tr>
							 						</thead>
								 						<tbody>
								 								
								 								<?php
								 								 $sql = "SELECT * FROM tv_series";
								 								 $result = $conn->query($sql);

								 								 if (!$result) {
																	    trigger_error('Invalid query: ' . $conn->error);
																	}

								 								 if($result->num_rows > 0) {
									 								 while($row = $result->fetch_assoc())
									 								 {
									 									?>	
									 									<tr>
									 										<td><?php echo$row ["TV_ID"]?> </td>
									 										<td>
									 											<?php echo$row ["TV_Name"];?>
									 									</tr>
									 								 	<?php
									 								 }
								 								} else "no result";

								 								
								 								 ?>
								 						</tbody>
							 					</table>
							 				</div>
							 			</div>
							 		</section>
							 	</h4>
		 					</div>
	 					</div>
	 				</div>

	 				<div class="card-single">
	 					<div class="card-body">
	 						
		 					<div>
		 						<h5>Award</h5>
		 					
		 						<h4>
		 							<section class="recent">
						 				<div class="activity-grid">
							 				<div class="activity-card">
							 					<table>
							 						<thead>
							 							<tr>
							 								<th>Award ID</th>
							 								<th>Award Name</th>
							 							</tr>
							 						</thead>
								 						<tbody>
								 							<?php
								 								 $sql = "SELECT * FROM award";
								 								 $result = $conn->query($sql);

								 								 if (!$result) {
																	    trigger_error('Invalid query: ' . $conn->error);
																	}
								 								 if($result->num_rows > 0) {
									 								 while($row = $result->fetch_assoc())
									 								 {
									 									?>	
									 									<tr>
									 										<td><?php echo$row ["Award_ID"];?> </td>
									 										<td>
									 											<?php echo$row ["Award_Name"];?>
									 										</td>
									 									</tr>
									 								 	<?php
									 								 }
								 								} else "no result";
								 								?>
								 								 	
								 						</tbody>
							 					</table>
							 				</div>
							 			</div>
							 		</section>
							 	</h4>
		 					</div>
	 					</div>
	 			</div>

	 				

	 				<div class="card-single">
	 					<div class="card-body">
	 						
		 					<div>
		 						<h5>Director</h5>
		 					
		 						<h4>
		 							<section class="recent">
						 				<div class="activity-grid">
							 				<div class="activity-card">
							 					<table>
							 						<thead>
							 							<tr>
							 								<th>Director ID</th>
							 								<th>Director Name</th>
							 							</tr>
							 						</thead>
								 						<tbody>
								 								<?php
								 								 $sql = "SELECT * FROM director";
								 								 $result = $conn->query($sql);

								 								 if (!$result) {
																	    trigger_error('Invalid query: ' . $conn->error);
																	}
								 								 if($result->num_rows > 0) {
									 								 while($row = $result->fetch_assoc())
									 								 {
									 									?>	
									 									<tr>
									 										<td><?php echo$row ["Director_ID"];?> </td>
									 										<td>
									 											<?php echo$row ["Director_Name"];?>
									 										</td>
									 									</tr>
									 								 	<?php
									 								 }
								 								} else "no result";
								 								?>
								 						</tbody>
							 					</table>
							 				</div>
							 			</div>
							 		</section>
							 	</h4>
		 					</div>
	 					</div>
	 				</div>

	 				<div class="card-single">
	 					<div class="card-body">
	 						
		 					<div>
		 						<h5>Actor</h5>
		 					
		 						<h4>
		 							<section class="recent">
						 				<div class="activity-grid">
							 				<div class="activity-card">
							 					<table>
							 						<thead>
							 							<tr>
							 								<th>Actor ID</th>
							 								<th>Actor Name</th>
							 							</tr>
							 						</thead>
								 						<tbody>
								 								<?php
								 								 $sql = "SELECT * FROM actor";
								 								 $result = $conn->query($sql);

								 								 if (!$result) {
																	    trigger_error('Invalid query: ' . $conn->error);
																	}
								 								 if($result->num_rows > 0) {
									 								 while($row = $result->fetch_assoc())
									 								 {
									 									?>	
									 									<tr>
									 										<td><?php echo$row["Actor_ID"];?> </td>
									 										<td>
									 											<?php echo$row["Actor_Name"];?>
									 										</td>
									 									</tr>
									 								 	<?php
									 								 }
								 								} else "no result";
								 								?>
								 						</tbody>
							 					</table>
							 				</div>
							 			</div>
							 		</section>
							 	</h4>
		 					</div>
	 					</div>
	 				</div>

	 				<div class="card-single">
	 					<div class="card-body">
	 						
		 					<div>
		 						<h5>Genre</h5>
		 					
		 						<h4>
		 							<section class="recent">
						 				<div class="activity-grid">
							 				<div class="activity-card">
							 					<table>
							 						<thead>
							 							<tr>
							 								<th>Genre ID</th>
							 								<th>Genre Name</th>
							 							</tr>
							 						</thead>
								 						<tbody>
								 								<?php
								 								 $sql = "SELECT * FROM genre";
								 								 $result = $conn->query($sql);

								 								 if (!$result) {
																	    trigger_error('Invalid query: ' . $conn->error);
																	}
								 								 if($result->num_rows > 0) {
									 								 while($row = $result->fetch_assoc())
									 								 {
									 									?>	
									 									<tr>
									 										<td><?php echo$row ["Genre_ID"];?> </td>
									 										<td>
									 											<?php echo$row ["Genre_name"];?>
									 										</td>
									 									</tr>
									 								 	<?php
									 								 }
								 								} else "no result";
								 								?>
								 						</tbody>
							 					</table>
							 				</div>
							 			</div>
							 		</section>
							 	</h4>
		 					</div>
	 					</div>
	 				</div>
	 		</div>
	 		<h2 id="add"><h2>
	 		<?php $update = false; ?>

	 		<?php
	 			if(isset($_GET['edit1'])){
	 				$id = $_GET['edit1'];
	 				$update = true;
	 		?>		
					<section class="recent">
		 				<div class="activity-grid">
			 				<div class="activity-card">
			 					<h3>TV Series</h3>
			 					<table>
			 						<thead>
			 							<tr>
			 								<th>ID</th>
			 								<th>TV NAME</th>
			 								<th>TOTAL EPISODES</th>
			 								<th>AWARD NAME</th>
			 								<th>DIRECTOR</th>
			 								<th>ACTOR</th>
			 								<th>GENRE</th>
			 							</tr>
			 						</thead>
			 						<tbody>
			 								
			 								<?php
			 								 $conn= mysqli_connect("localhost", "root", "", "dbname");
			 				 				 if ($conn-> connect_error)
			 								 {
			 								 	die("Connection failed:" . $conn-> connect_error);
			 								 }
			 								 $sql = "SELECT * FROM tv_series where tv_id='$id'";
			 								 $result = $conn->query($sql);

			 								 if (!$result) {
												    trigger_error('Invalid query: ' . $conn->error);
												}

			 								 if($result->num_rows > 0) {
				 								 while($row = $result->fetch_assoc())
				 								 {
				 									?>	
				 									<tr>
				 										<td><?php echo$row ["TV_ID"];?></td>
				 										<?php $tvid = $row ['TV_ID'];?>
				 										<td><?php echo$row ["TV_Name"];?></td>
				 										<td><?php echo$row ["TV_TotalEpisodes"];?> </td>
				 										<td>
				 											
				 												<?php 
				 												$sql1 = "SELECT * FROM tv_award LEFT JOIN award USING (award_id) WHERE tv_id = '$tvid'";
			 								 					$result1=$conn->query($sql1) or die($conn->error());
			 								 					while($row1 = $result1->fetch_assoc()){
			 								 					?>
			 								 					<?php echo$row1 ["Award_ID"];?>
							 								 	<?php echo$row1 ["Award_Name"];?><br>
							 									<?php } ?>


				 										</td>
				 										<td>

				 											<?php 
				 												
				 												$sql4 = "SELECT * FROM tv_director LEFT JOIN director USING (director_id) WHERE tv_id = '$tvid'";
			 								 					$result4=$conn->query($sql4) or die($conn->error());
			 								 					while($row4 = $result4->fetch_assoc()){
			 								 					?>
			 								 					<?php echo$row4 ["Director_ID"];?>
							 								 	<?php echo$row4 ["Director_Name"];?><br>
							 									<?php } ?>

				 										</td>
				 										<td>

				 											<?php 
				 												
				 												$sql2 = "SELECT * FROM tv_actor LEFT JOIN actor USING (actor_id) WHERE tv_id = '$tvid'";
			 								 					$result2=$conn->query($sql2) or die($conn->error());
			 								 					while($row2 = $result2->fetch_assoc()){
			 								 					?>
			 								 					<?php echo$row2 ["Actor_ID"];?>
							 								 	<?php echo$row2 ["Actor_Name"];?><br>
							 									<?php } ?>

				 										</td>
				 										<td>

				 											<?php 
				 												$sql3 = "SELECT * FROM genre_tv LEFT JOIN genre USING (genre_id) WHERE tv_id = '$tvid'";
			 								 					$result3=$conn->query($sql3) or die($conn->error());
			 								 					while($row3 = $result3->fetch_assoc()){
			 								 					?>
			 								 					<?php echo$row3 ["Genre_ID"];?>
							 								 	<?php echo$row3 ["Genre_name"];?><br>
							 									<?php } ?>

				 										</td>
				 									</tr>
				 								 	<?php
				 								 }
				 							
			 								} else "no result";

			 								$conn->close();
			 								 ?>
			 						</tbody>
			 					</table>
			 				</div>
			 			</div>
			 		</section>
						
			<?php }?>	

	 		<section class="recent">
		 				<div class="activity-grid">
			 				<div class="activity-card">
			 					<h3>ADD or EDIT</h3>
			 					<table>
			 						<thead>
			 							<tr>
			 								<th>TV Detail</th>
			 								<th>Award</th>
			 								<th>Director</th>
			 								<th>Actor</th>
			 								<th>Genre</th>
			 								<th>Status</th>
			 							</tr>
			 						</thead>
			 						<tbody>
			 							
			 							<tr>
			 								<form action="process.php" method="POST">
			 								<td>
			 									<div>
			 										<input class="form-contor" placeholder="TV ID" type="text" name="tvid" value="">
			 										<input class="form-contor" placeholder="TV Name" type="text" name="tvname" value="">
			 										<input class="form-contor" placeholder="Total Episodes" type="text" name="totalepisode" value="<?php echo $totalepisode; ?>">
			 									</div>
			 								</td>
			 								<td>
			 									<div>
			 										<input class="form-contor" placeholder="Award ID" type="text" name="awardid" value="">
			 										<input class="form-contor" placeholder="Award Name" type="text" name="awardname" value="">
			 										<?php
	 													if(isset($_GET['edit1'])){?>
	 													<input class="form-contor" placeholder="New Award ID" type="text" name="nawardid" value="">
	 												<?php } ?>
			 									</div>
			 								</td>
			 								<td>
			 									<div>
			 										<input class="form-contor" placeholder="Director ID" type="text" name="directorid" value="">
			 										<input class="form-contor" placeholder="Director Name" type="text" name="directorname" value="">
			 										<?php
	 													if(isset($_GET['edit1'])){?>
	 													<input class="form-contor" placeholder="New Director ID" type="text" name="ndirectorid" value="">
	 												<?php } ?>
			 									</div>
			 								</td>
			 								<td>
			 									<div>
				 									<input class="form-contor" placeholder="Actor ID" type="text" name="actorid" value=""><br>
				 									<input class="form-contor" placeholder="Actor Name" type="text" name="actorname" value=""><br>
				 									<?php
	 													if(isset($_GET['edit1'])){?>
	 													<input class="form-contor" placeholder="New Actor ID" type="text" name="nactorid" value="">
	 												<?php } ?>
			 									</div>
			 								</td>
			 								<td>
			 									<div>
				 									<input class="form-contor" placeholder="Genre ID" type="text" name="genreid" value=""><br>
				 									<input class="form-contor" placeholder="Genre Name" type="text" name="genrename" value=""><br>
				 									<?php
	 													if(isset($_GET['edit1'])){?>
	 													<input class="form-contor" placeholder="New Genre ID" type="text" name="ngenreid" value="">
	 												<?php } ?>
			 									</div>
			 								</td>
			 								<td>
			 									<?php if ($update==true): ?>
			 										<button class="badge" type="submit" name="update">Update</button>
			 									<?php else: ?>
			 								 		<button class="badge" type="submit" name="save">Save</button>
			 								 	<?php endif; ?>
			 								</td>
			 								</form>
			 							</tr>
			 						</tbody>
			 					</table>
			 				</div>
			 			</div>
			 		</section>

	 	</main>
	</body>
</html>