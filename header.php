<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Elite Match Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap -->
	<link href="css/font-awesome.css" rel="stylesheet"> <!-- Font awesome -->
	<link href="css/owl.carousel.css" rel="stylesheet"><!-- Clients -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /><!-- Pop-up -->
	<link href="css/lsb.css" rel="stylesheet" type="text/css"><!-- gallery -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
	<!--//fonts-->


	</script>
	<style>
		      li {
    list-style-type: none;
}
   
	</style>
</head>

<body>
	<!--banner start here-->
	<div class="topDate" style="background-color:black; height:40px;">

	</div>
	<div class="banner-w3ls inner-banner-agileits" id="home">
		<div class="container">
			<!-- header -->
			<div class="header-inner">
				<h1 class="logo">
					<a href="index.php"><img src="images/LOGO.png"></a>
				</h1>
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Policies & Terms<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="TermsandCondition.php">Terms And Condition</a></li>
									<li><a href="PrivacyPolicy.php">Privacy Policy</a></li>
									<li><a href="ReturnPolicy.php">Return Policy</a></li>
								</ul>
							</li>
							<li><a href="blog.php"> Blog </a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</nav>
				<div class="header-right-w3ls">
					<?php
					if (isset($_SESSION['Email'])) {
						
					} else {
						echo "<a href='login.php'>Log In</a>";
					}
					?>
					<?php
					if (isset($_SESSION['Email'])) {
						include 'config.php';
						$Email = $_SESSION['Email'];
						$sql = "select Profile_Pic from register where Email= '$Email'";
						$result = $conn->query($sql);
						$row = $result->fetch_assoc();
						$fliename = $row['Profile_Pic'];
						echo "<li class='dropdown menu__item'>
								<a href='#' id='profile' class='dropdown-toggle menu__link' data-toggle='dropdown' data-hover='Pages'><img style='border-radius:50%;height:60px; width:60px;' src='$fliename'> </a>
								<ul class='dropdown-menu'>
								<li><a href='profile_form.php'>Create Your Profile</a></li>
								<li><a href='self-Profile.php'>View Your Profile</a></li>
								<li><a href='userEdit.php'>Edit Your Profile</a></li>
								<li><a href='logout.php'>Log Out</a></li>
								</ul>
							</li>";
					} else {
						echo "<a href='register.php'>Register</a>";
					}
					?>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//home-->
	<!--banner end here-->