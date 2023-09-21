<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TV Series</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
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

	</style>
	</head>
<body>
<div class="main-content">

	 		<main>
	 			<section class="recent">
	 				<div class="activity-grid">
		 				<div class="activity-card">
		 					<h3>TV Episode</h3>
		 						<a href="#add" class="position">
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

			 											<a href="process2.php?edit=<?php echo $row ['Episode_ID'];?>"
			 											<button class="badge btn-info">Watch Now</button></a>
			 											
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
	</body>		
</html>