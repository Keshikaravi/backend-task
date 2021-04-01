<?php

$cname = $_REQUEST['cname'];


$input = file_get_contents("$cname.html");
$url=preg_match('/"canonical"[^"]+"\K[^"]+/',$input,$out)?$out[0]:null;
$tit=preg_match('/"title"[^"]+"\K[^"]+/',$input,$out)?$out[0]:null;
$img=preg_match('/"image_src"[^"]+"\K[^"]+/',$input,$out)?$out[0]:null;
$des=preg_match('/"channelId"[^"]+"\K[^"]+/',$input,$out)?$out[0]:null;
$desc=preg_match('/"og:description"[^"]+"\K[^"]+/',$input,$out)?$out[0]:null;

// echo $;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Melkin, Booking and Reservation form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
	<title>Poornatha</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	
	<!-- MODERNIZR -->
	<script src="js/modernizr.js"></script>

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	
	<!-- /menu -->
	
	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper bg_hotel">
					<div class="wrapper">
						<!-- <a href="index.html" id="logo"><img src="img/logo.svg" alt="" width="45" height="40"></a> -->
						<div id="social">
							<!-- <ul>
								<li><a href="#0"><i class="social_facebook"></i></a></li>
								<li><a href="#0"><i class="social_twitter"></i></a></li>
								<li><a href="#0"><i class="social_instagram"></i></a></li>
							</ul> -->
						</div>
						<!-- /social -->
						<div class="left_title">
							<h3>Discover details of a Channel</h3>
						</div>
					</div>
				</div>
				<!--/content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form  method="POST" action="index.php">
							
							<div id="middle-wizard">
								<div class="step">
                                    <h3 class="main_question"><strong></strong><?php echo $cname?></h3>
                                    <label>URL</label>
									<div class="form-group">
										<input type="text" name="url" class="form-control required" value="<?php echo $url?>">
                                    </div>
									<label>Channel Id</label>
									<div class="form-group">
										<input type="text" name="url" class="form-control required" value="<?php echo $des?>">
                                    </div>
                                    <label>Description</label>
									<div class="form-group">
										<textarea  name="desc" class="form-control required" placeholder="<?php echo $desc?>" style="height:100px" disabled></textarea>
                                    </div>
                               <a href="../goal/index.php">
								<input value="Back" class="btn btn-info" style="float: right;" >
</a>
					
								</div>
						</form>
					</div>					
				
					<!-- Footer -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->


	<!-- /cd-overlay-nav -->

	<!-- /cd-overlay-content -->

	<!-- /menu button -->
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
    <!-- /.modal -->
    
    <script>
function myFunction() {
  var copyText = document.getElementById("url");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
	
	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/functions.js"></script>

	<!-- Wizard script -->
	<script src="js/booking_hotel_func.js"></script>

</body>
</html>