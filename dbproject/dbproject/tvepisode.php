<?php
	session_start();

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
			grid-template-columns: repeat(2,1fr);
			grid-column-gap: 7px;
		}

		.card-single {
			background: #fff;
			border-radius: 7px;
			box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
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

	<?php require_once 'process1.php'; ?>

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
		 			<a href="logout.php">
		 			<span>Logout</span>
		 			</a>
		 		</li>
		 	</ul>
		 </div>
	 </div>

	 <div class="main-content">

	 	<header><h2 class="dash-title">TV Episode Data</h2></header>

	 		<main>
	 			<section class="recent">
	 				<div class="activity-grid">
		 				<div class="activity-card">
		 					<h3>TV Episode</h3>
		 						<a href="#add" class="position">
		 							<span class="badges add">Add</span>
									<h4><br></h4>
		 						</a>

		 					<table>
		 						<thead>
		 							<tr>
		 								<th>TV ID</th>
		 								<th>TV NAME</th>
		 								<th>EPISODE NAME</th>
		 								<th>EPISODE NO</th>
		 								<th>RATING</th>
		 								<th>DURATION</th>
		 								<th>Status</th>
		 							</tr>
		 						</thead>
		 						<tbody>
		 								
		 								<?php
		 								 $conn= mysqli_connect("localhost", "root", "", "dbname");
		 								 if ($conn-> connect_error)
		 								 {
		 								 	die("Connection failed:" . $conn-> connect_error);
		 								 }
		 								 $sql = "SELECT * FROM tv_series LEFT JOIN episode USING (tv_id)";
		 								 $result = $conn->query($sql);

		 								 if (!$result) {
											    trigger_error('Invalid query: ' . $conn->error);
											}

		 								 if($result->num_rows > 0) {
			 								 while($row = $result->fetch_assoc())
			 								 {
			 									?>	
			 									<tr>
			 										<td><?php echo$row ["TV_ID"];?> </td>
			 										<td>
			 											<?php echo$row ["TV_Name"];?>
			 										</td>
			 										<td>
			 											<?php echo$row ["Episode_ID"];?>
			 											<?php echo$row ["Episode_Name"];?>	
			 										</td>
			 										<td><?php echo$row ["Episode_Num"];?> </td>
			 										<td><?php echo$row ["Episode_Rating"];?> </td>

			 										<td><?php echo$row ["Episode_Duration"];?><td>

			 											<a href="tvepisode.php?edit=<?php echo $row ['Episode_ID'];?>"
			 											<button class="badge btn-info">Edit</button></a>
			 											<a href="process1.php?delete=<?php echo $row ['Episode_ID'];?>"
		 												<button class="badge  btn-info">Delete</button></a>
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

		 		<h2 id="add"><h2>

		 			<section class="recent">
		 				<div class="activity-grid">
			 				<div class="activity-card">
			 					<h3>ADD or EDIT</h3>
			 					<table>
			 						<thead>
			 							<tr>
			 								<th>TV ID</th>
			 								<th>TV NAME</th>
			 								<th>EPISODE NAME</th>
			 								<th>EPISODE NO</th>
			 								<th>RATING</th>
			 								<th>DURATION</th>
			 								<th>Status</th>
			 							</tr>
			 						</thead>
			 						<tbody>
			 							
			 							<tr>
			 								<form action="process1.php" method="POST">
			 								<td><div><input class="form-contor" placeholder="TV ID" type="text" name="tvid" value="<?php echo $tvid; ?>"></div></td>
			 								<td>
			 									<div>
			 										<input class="form-contor" placeholder="TV Name" type="text" name="tvname" value="<?php echo $tvname; ?>">
			 										<input class="form-contor" placeholder="Total Episode" type="text" name="totalepisode" value="<?php echo $totalepisode; ?>">
			 									</div>
			 								</td>
			 								<td>
			 									<div>
			 										<input class="form-contor" placeholder="Episode ID" type="text" name="episodeid" value="<?php echo $episodeid; ?>">
			 										<input class="form-contor" placeholder="Episode Name" type="text" name="episodename" value="<?php echo $episodename; ?>">
			 									</div>
			 								</td>
			 								<td><div><input class="form-contor" placeholder="Episode No" type="text" name="episodenum" value="<?php echo $episodenum; ?>"></div></td>
			 								<td><div><input class="form-contor" placeholder="Rating" type="text" name="rating" value="<?php echo $rating; ?>"></div></td>
			 								<td>
			 									<div><input class="form-contor" placeholder="Duration" type="text" name="duration" value="<?php echo $duration; ?>"></div>
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
 		</div>	
	</body>		
</html>