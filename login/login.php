<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 17:59:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Poornatha</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `citizen` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

            // Redirect user to index.php
	    header("Location: ../goal/index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>    
    <div id="wrapper" class="wrapper">        
        <div class="fxt-template-animation fxt-template-layout5">
            <div class="fxt-bg-img fxt-none-767" data-bg-image="img/figure/bg5-l.jpg">
                <div class="fxt-intro">
                <div class="sub-title">Welcome To</div>
                    <h1>Poornatha</h1>
                    <p>End to end youtube Analyser.</p>
                </div>
            </div>
            <div class="fxt-bg-color">
                <div class="fxt-header">
                    <a href="login-5.html" class="fxt-logo"><img src="logo.png"  style="width:170px"alt="Logo"></a>
                    <div class="fxt-page-switcher">
                        <a href="login.php" class="switcher-text switcher-text1 active">LogIn</a>
                        <a href="register.php" class="switcher-text switcher-text2">Register</a>
                    </div>
                </div>
                <div class="fxt-form">
                <form action="" method="post" name="login">
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-1">                                                
                        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-2">                                                
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                            <i class="flaticon-padlock"></i>
                        </div>
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-3">
                            <div class="fxt-content-between">
                            <button  name="submit" type="submit" value="Login" class="fxt-btn-fill">Log in</button>
                                
                            </div>
                        </div>
                    </form>                            
                </div> 
              
            </div>  
        </div>
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.5.0.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <?php } ?>

</body>


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 17:59:29 GMT -->
</html>