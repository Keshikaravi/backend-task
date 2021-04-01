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
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">	
<style>
.table-sortable th {
  cursor: pointer;
}

.table-sortable .th-sort-asc::after {
  content: "\25b4";
}

.table-sortable .th-sort-desc::after {
  content: "\25be";
}

.table-sortable .th-sort-asc::after,
.table-sortable .th-sort-desc::after {
  margin-left: 5px;
}

.table-sortable .th-sort-asc,
.table-sortable .th-sort-desc {
  background: rgba(0, 0, 0, 0.1);
}

</style>
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
						<a href="index.php" class="menu--link" title="Home">
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
						<a href="setsearchvalue.php" class="menu--link active" >
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
		<form id="keywordForm" method="post" action="addvalue.php">
		<label>Enter Search Value</label>

		<div class="row">
		<div class="col-lg-6">
  <div class="form-group">
   	
    <input type="text" class="form-control" type="search" id="keyword" name="keyword"  placeholder="Enter Keyword">
  </div></div>
</div>
<div>
  <button type="submit" name="submit" value="Search" class="btn btn-danger">Set</button>
  </div></div>
</form>
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
	<script>
	/**
 * Sorts a HTML table.
 * 
 * @param {HTMLTableElement} table The table to sort
 * @param {number} column The index of the column to sort
 * @param {boolean} asc Determines if the sorting will be in ascending
 */
function sortTableByColumn(table, column, asc = true) {
    const dirModifier = asc ? 1 : -1;
    const tBody = table.tBodies[0];
    const rows = Array.from(tBody.querySelectorAll("tr"));

    // Sort each row
    const sortedRows = rows.sort((a, b) => {
        const aColText = a.querySelector(`td:nth-child(${ column + 1 })`).textContent.trim();
        const bColText = b.querySelector(`td:nth-child(${ column + 1 })`).textContent.trim();

        return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
    });

    // Remove all existing TRs from the table
    while (tBody.firstChild) {
        tBody.removeChild(tBody.firstChild);
    }

    // Re-add the newly sorted rows
    tBody.append(...sortedRows);

    // Remember how the column is currently sorted
    table.querySelectorAll("th").forEach(th => th.classList.remove("th-sort-asc", "th-sort-desc"));
    table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-asc", asc);
    table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-desc", !asc);
}

document.querySelectorAll(".table-sortable th").forEach(headerCell => {
    headerCell.addEventListener("click", () => {
        const tableElement = headerCell.parentElement.parentElement.parentElement;
        const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
        const currentIsAscending = headerCell.classList.contains("th-sort-asc");

        sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
    });
});

	</script>
	
</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 12:50:50 GMT -->
</html>