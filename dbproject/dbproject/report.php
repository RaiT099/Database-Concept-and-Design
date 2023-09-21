<?php
	session_start();
	$conn= mysqli_connect("localhost", "root", "", "dbname");
	if ($conn-> connect_error)
	{
		die("Connection failed:" . $conn-> connect_error);
	}

?>

<html>
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
			margin-bottom: 1rem;
		}

		.card-body {
			padding: 1rem 2rem;
			align-items: center;
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
			position: bottom;
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
			padding: .5rem 1.5rem;
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

	 	<header><h2 class="dash-title">Report</h2></header>

	 		<main>

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
							 								<th>Top</th>
							 								<th>TV Series</th>
							 							</tr>
							 						</thead>
								 						<tbody>
								 								
								 								<?php
								 								 $sql = "SELECT tv_id, tv_series.tv_name,count(tv_user.user_id) FROM tv_user LEFT JOIN tv_series USING (tv_id) GROUP BY tv_series.tv_name ORDER BY count(tv_user.user_id) DESC LIMIT 5";
								 								 $result = $conn->query($sql);

								 								 if (!$result) {
																	    trigger_error('Invalid query: ' . $conn->error);
																	}

								 								 if($result->num_rows > 0) {
								 								 	$i = 1;
									 								 while($row = $result->fetch_assoc())
									 								 {
									 									?>	
									 									<tr>
									 										<td><?php echo $i++;?> </td>
									 										<td>
									 											<?php echo$row ["tv_name"];?>
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
				 			<div class="card-footer">
				 				<a href=""></a>
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
							 								<th>Top</th>
							 								<th>Genre</th>
							 							</tr>
							 						</thead>
								 						<tbody>
								 								<?php
								 								 $sql = "SELECT genre_id, genre.genre_name,count(genre_tv.genre_id)  FROM genre_tv LEFT JOIN genre USING (genre_id) GROUP BY genre.genre_name ORDER BY count(genre_tv.genre_id) DESC LIMIT 5";
								 								 $result = $conn->query($sql);

								 								 if (!$result) {
																	    trigger_error('Invalid query: ' . $conn->error);
																	}
																$i = 1;
								 								 if($result->num_rows > 0) {
									 								 while($row = $result->fetch_assoc())
									 								 {
									 									?>	
									 									<tr>
									 										<td><?php echo $i++;?> </td>
									 										<td>
									 											<?php echo$row ["genre_name"];?>
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
				 			<div class="card-footer">
				 				<a href=""></a>
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
							 								<th>Top</th>
							 								<th>Actor</th>
							 							</tr>
							 						</thead>
								 						<tbody>
								 								<?php
								 								 $sql = "SELECT actor_id, actor.actor_name,count(tv_actor.actor_id)  FROM tv_actor LEFT JOIN actor USING (actor_id) GROUP BY actor.actor_name ORDER BY count(tv_actor.actor_id) DESC LIMIT 5";
								 								 $result = $conn->query($sql);

								 								 if (!$result) {
																	    trigger_error('Invalid query: ' . $conn->error);
																	}
																$i = 1;
								 								 if($result->num_rows > 0) {
									 								 while($row = $result->fetch_assoc())
									 								 {
									 									?>	
									 									<tr>
									 										<td><?php echo $i++;?> </td>
									 										<td>
									 											<?php echo$row ["actor_name"];?>
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
				 			<div class="card-footer">
				 				<a href=""></a>
				 			</div>
	 				</div>

	 				<div class="card-single">
	 					<div class="card-body">
	 						
		 					<div>
		 						<h5>Grand Total</h5>
		 					
		 						<h4>
		 							<section class="recent">
						 				<div class="activity-grid">
							 				<div class="activity-card">
							 					<table>
							 						<thead>
							 							<tr>
							 								<th>Plan</th>
							 								<th>Total</th>
							 							</tr>
							 						</thead>
								 						<tbody>
								 							<?php
								 								 $sql = "SELECT user_plan.user_id, plan_id, plan.plan_name, sum(plan.fee) AS fee_sum FROM user_plan LEFT JOIN plan USING (plan_id) GROUP BY plan.plan_name";
								 								 $result = $conn->query($sql);

								 								 if (!$result) {
																	    trigger_error('Invalid query: ' . $conn->error);
																	}
																$i = 1;
								 								 if($result->num_rows > 0) {
									 								 while($row = $result->fetch_assoc())
									 								 {
									 									?>	
									 									<tr>
									 										<td><?php echo$row ["plan_name"];?> </td>
									 										<td>
									 											<?php echo$row ["fee_sum"];?>
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
	 						<h4><br><br><br><br><br></h4>
				 			<div class="card-footer"></div>
	 				</div>
	 			</div>
	 		</div>
	</body>
</html>

