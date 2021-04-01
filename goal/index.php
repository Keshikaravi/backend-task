<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../login/login.php");
exit(); }

$username =  $_SESSION['username'];
$email =  $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Poornatha</title>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/night-mode.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">	
		
	</head>

<body>
	<!-- Header Start -->
	<header class="header clearfix">
		<button type="button" id="toggleMenu" class="toggle_menu">
		  <i class='uil uil-bars'></i>
		</button>
		<button id="collapse_menu" class="collapse_menu">
			<i class="uil uil-bars collapse_menu--icon "></i>
			<span class="collapse_menu--label"></span>
		</button>
	
	
		<div class="header_right">
			<ul>

				<li class="ui dropdown">
					<a href="#" class="opts_account">
						<img src="images/hd_dp.jpg" alt="">
					</a>
					<div class="menu dropdown_account">
						<div class="channel_my">
							<div class="profile_link">
								<img src="images/hd_dp.jpg" alt="">
								<div class="pd_content">
									<div class="rhte85">
										<h6><?php echo $username; ?></h6>
										<div class="mef78" title="Verify">
											<i class='uil uil-check-circle'></i>
										</div>
									</div>
									<span><?php echo $email; ?></span>
								</div>							
							</div>
						</div>
					
						<a href="apikey.php" class="item channel_item">API Key Add</a>
						<a href="activate.php" class="item channel_item">API Key Activate</a>

						<a href="logout.php" class="item channel_item">Sign Out</a>					</div>
				</li>
			</ul>
		</div>
	</header>
	<!-- Header End -->
	<!-- Left Sidebar Start -->
	<nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu" >
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="index.php" class="menu--link active" title="Home">
						<i class='uil uil-dashboard menu--icon'></i>
							<span class="menu--label">Dashboard</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="videosearch.php" class="menu--link" >
						<i class='uil uil-search menu--icon'></i>
							<span class="menu--label">Search Video</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="channel.php" class="menu--link" >
						<i class='uil uil-laptop menu--icon'></i>
							<span class="menu--label">Search Channel</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="../you/index.php" class="menu--link" >
						<i class='uil uil-laptop menu--icon'></i>
							<span class="menu--label">Channel Id</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="table.php" class="menu--link" >
						<i class='uil uil-table menu--icon'></i>
							<span class="menu--label">Insert into Database</span>
						</a>
					</li>
			
					<li class="menu--item">
						<a href="setsearchvalue.php" class="menu--link" >
						<i class='uil uil-clock menu--icon'></i>
							<span class="menu--label">Continous Fetch</span>
						</a>
					</li>

				
				
				</ul>
			</div>
			
		
		</div>
	</nav>
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">			
				<div class="row">
					<div class="col-xl-12 col-lg-12">
					<h4 class="item_title">Active Api Key</h4>
					<?php
$con= mysqli_connect("localhost", "root", "", "poornatha");


$result = mysqli_query($con,"SELECT * FROM apikey WHERE statuss like 'active'");
$count=1;
while($row = mysqli_fetch_assoc($result)) { 

	?>

<h5 ><?php echo $row["akey"]; ?></h5>


<?php $count++;
									} ?>
						
						<div class="section3125 mt-50">
							<h4 class="item_title">Collected Video </h4>
								<div class="la5lo1">
								<div class="owl-carousel featured_courses owl-theme">
								<?php
$con= mysqli_connect("localhost", "root", "", "poornatha");


$result = mysqli_query($con,"SELECT * FROM  video ORDER BY time DESC");
$count=1;
while($row = mysqli_fetch_assoc($result)) { 

	?>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="" class="fcrse_img">
											<?php

$image = $row["image"];
$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
?>

												<div class="course-overlay">

												</div>
											</a>
											<div class="fcrse_content">
												
												<div class="vdtodt">
												
												</div>
												
												<a href="course_detail_view.html" class="crse14s"><?php echo $row["name"]; ?>(<?php echo $row["videoid"]; ?>)</a>
												<a href="#" class="crse-cate"><?php echo $row["time"]; ?></a>
												<a href="#" class="crse-cate"><?php echo $row["description"]; ?></a>
												<button data-direction="finish" class="btn btn-danger" style="margin-top:2%;float:right"><?php echo $row["search"]; ?></button>

											</div>
										</div>
									</div>
								
									<?php $count++;
									} ?>
						
						

								</div>
							</div>
						</div>

		
		
					</div>

				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12">
					
						<div class="section3125 mt-50">
							<h4 class="item_title">Sorted Order</h4>
							<table class="table table-hover table-dark table-sortable" >
  <thead>
    <tr>
      <th scope="col">Video Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
	  <th scope="col">Channel</th>

    </tr>
  </thead>
  <tbody>
								<?php
$con= mysqli_connect("localhost", "root", "", "poornatha");


$result = mysqli_query($con,"SELECT * FROM  video ORDER BY time DESC");
$count=1;
while($row = mysqli_fetch_assoc($result)) { 

	?>
									    <tr>
      <td><?php echo $row['videoid']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['description']; ?></td>
	  <td><?php echo $row['time']; ?></td>	
	  <td><?php echo $row['channel']; ?></td>

   
    </tr>
								
									<?php $count++;
									} ?>
						
						</tbody>
</table>

								</div>
							</div>
						</div>

		
		
					</div>

				</div>
			</div>
</div>
</div>
	</div>
	<!-- Body End -->

	<script src="js/vertical-responsive-menu.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/semantic/semantic.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
	
	
</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 12:50:50 GMT -->
</html>