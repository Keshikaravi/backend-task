<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../login/login.php");
exit(); }

$username =  $_SESSION['username'];
$email =  $_SESSION['email'];

?>
					<?php
$con= mysqli_connect("localhost", "root", "", "poornatha");


$result = mysqli_query($con,"SELECT * FROM apikey WHERE statuss like 'active'");
$count=1;
while($row = mysqli_fetch_assoc($result)) { 

	$API_key = $row['akey'];
}
	?>
<?php

    
     if (isset($_POST['submit']) )
     {
        $keyword = $_POST['keyword'];
		$max = $_POST['max'];      
        if (empty($keyword))
        {
            $response = array(
                  "type" => "error",
                  "message" => "Please enter the keyword."
                );
        } 
    }
         
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
						<a href="index.php" class="menu--link " title="Home">
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
					<li class="menu--item ">
						<a href="channel.php" class="menu--link active" >
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
		<div class="row">
		<div class="col-lg-2">
		</div>
		<div class="col-lg-10">
		<form id="keywordForm" method="post" action="">
		<label>Enter Channel Id</label>

		<div class="row">
		<div class="col-lg-6">
  <div class="form-group">
   	
    <input type="text" class="form-control" type="search" id="keyword" name="keyword"  placeholder="Enter channel id">
  </div></div>
  <div class="form-group">
   	
	   <input type="number" class="form-control" id="max" name="max"  placeholder="Max">
	 </div></div>
<div>
  <button type="submit" name="submit" value="Search" class="btn btn-danger">Submit</button>
  </div></div>
</form>
		</div>
		</div>
			<div class="container-fluid">			
				<div class="row">
					<div class="col-xl-12 col-lg-12">
					
						<div class="section3125 mt-50">
							<h4 class="item_title">Related Video</h4>
								<div class="la5lo1">
								<div class="owl-carousel featured_courses owl-theme">
								<?php if(!empty($response)) { ?>
                <div class="response <?php echo $response["type"]; ?>"> <?php echo $response["message"]; ?> </div>
        <?php }?>
        <?php
            if (isset($_POST['submit']) )
            {
                                         
              if (!empty($keyword))
              {
			

                $googleApiUrl = 'https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$keyword.'&maxResults='.$max.'&key='.$API_key.'';

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_VERBOSE, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $response = curl_exec($ch);

                curl_close($ch);
                $data = json_decode($response);
                $value = json_decode(json_encode($data), true);
            ?>
			    <?php
                for ($i = 0; $i < $max; $i++) {
                    $videoId = $value['items'][$i]['id']['videoId'];
                    $title = $value['items'][$i]['snippet']['title'];
                    $description = $value['items'][$i]['snippet']['description'];
					$image = $value['items'][$i]['snippet']['thumbnails']['high']['url'];
                    $date = $value['items'][$i]['snippet']['publishedAt'];   
                    ?> 
									<div class="item" id="SearchResultsDiv">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view.php?id=<?php echo $videoId ?>" class="fcrse_img">
											<?php


$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
?>

												<div class="course-overlay">

												</div>
											</a>
											<div class="fcrse_content">
												
												<div class="vdtodt">
												
												</div>
												<a href="course_detail_view.html" class="crse14s"><?php echo $title; ?>(<?php echo $videoId; ?>)</a>
												<a href="#" class="crse-cate"><?php echo $date; ?></a>
												<a href="#" class="crse-cate"><?php echo $description; ?></a>

											</div>
										</div>
									</div>
								
								
						
									<?php 
                    }
                } 
           
            }
            ?> 

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