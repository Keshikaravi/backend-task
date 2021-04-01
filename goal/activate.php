
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

	
<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/create_new_course.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 12:55:52 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Poornatha</title>
		
		<!-- Favicon Icon -->
	
		
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/vertical-responsive-menu1.min.css" rel="stylesheet">
		<link href="css/instructor-dashboard.css" rel="stylesheet">
		<link href="css/instructor-responsive.css" rel="stylesheet">
		<link href="css/night-mode.css" rel="stylesheet">
		<link href="css/jquery-steps.css" rel="stylesheet">
		
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
					
					
						<a href="logout.php" class="item channel_item">Sign Out</a>
					</div>
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
			<div class="container">			
				<div class="row">
					<div class="col-lg-12">	
						<h2 class="st_title"><i class="uil uil-analysis"></i>Activate</h2>
					</div>					
				</div>				
				<div class="row">
					<div class="col-12">
						<div class="course_tabs_1">
							<div id="add-course-tab" class="step-app">
								<ul class="step-steps">
									<li class="active" hidden>
										<a href="#tab_step1">
											<span class="number"></span>
											<span class="step-name">General Information</span>
										</a>
									</li>
						
								</ul>
								<div class="step-content">
									<div class="step-tab-panel step-tab-info active" id="tab_step1"> 
										<div class="tab-from-content">
											<div class="title-icon">
											</div>
											<form action="updatekey.php" method="post" enctype="multipart/form-data">
											<div class="course__form">
												<div class="general_info10">
												
													<div class="row">
													<div class="col-lg-4 col-md-6" >															
															<div class="ui search focus mt-30 lbel25">
															<label>User</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Key" name="user" value="<?php echo $username; ?>">															
																</div>
															</div>									
														</div>
                                                    <div class="col-lg-4 col-md-6">
															<div class="mt-30 lbel25">
																<label>Key</label>
															<select class="ui hj145 dropdown cntry152 prompt srch_explore" name="key">
																<option value="">Select Key</option>
															
																<?php
$con= mysqli_connect("localhost", "root", "", "poornatha");


$result = mysqli_query($con,"SELECT * FROM apikey");
$count=1;
while($row = mysqli_fetch_assoc($result)) { 

	?>															<option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
																<?php $count++;
									} ?>
															</select>
														</div>
																									
													</div>
													
											
										</div>
									</div>
									
						

									<button data-direction="finish" type=submit name="submit" class="btn btn-default steps_btn" style="margin-top:4%;float:right">Activate</button>
								</form>
									<div class="step-tab-panel step-tab-amenities" id="tab_step4">
										

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
	<script src="js/jquery-steps.min.js"></script>
	<script>
		$('#add-course-tab').steps({
		  onFinish: function () {
			alert('Wizard Completed');
		  }
		});		
	</script>
			
</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/create_new_course.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 12:56:02 GMT -->
</html>