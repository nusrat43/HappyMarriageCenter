<?php
session_start(); // Start the session
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
	<style>
		li {
			list-style-type: none;
		}

		p {
			text-align: justify;
		}

		.app-img {
			object-fit: cover;
			height: 300px;
			width: 350px;
		}

		#img {
			margin: 100px;
			width: 100%;
			height: 100%;
			border-radius: 30% 70% 48% 52% / 55% 42% 58% 45%;
			box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
		}

		#img2 {
			margin: 0 150px;
			width: 100%;
			height: 100%;
			box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
		}

		@media screen and (max-width: 992px) {
			#img {
				margin: 0px;
				margin-top: 10px;
				width: 300px;
				border-radius: 0;
				box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
			}

			#img2 {
				margin: 0px;
				margin-top: 10px;
				width: 300px;
				box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
			}

			.main-app-img {
				display: flex;
				justify-content: center;
			}

			.app-img {
				object-fit: cover;
				height: 300px;

			}
		}
	</style>
</head>

<body>
	<!--banner start here-->
	<div class="banner-w3ls" id="home">
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
							<li><a href="index.php" class="active">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Policies & Terms<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="TermsandCondition.php">Terms And Condition</a></li>
									<li><a href="PrivacyPolicy.php">Privacy Policy</a></li>
									<li><a href="ReturnPolicy.php">Return Policy</a></li>
								</ul>
							</li>
							<li><a href="blog.php"> Blog</a> </li>
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
			<!-- //header -->
			<!-- banner-slider -->
			<div class="w3l_banner_info">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="w3ls-info">
									<h4>Be fabulous. Be empowered. Be Blown Away!</h4>
									<p>We’re Committed to Service Excellence By Happy Marriage Center.</p>
								</div>

							</li>
							<li>
								<div class="w3ls-info">
									<h4>Dream it. Believe it. make it happen! </h4>
									<p>Checkout our list of best services and plan to best Finding.</p>
								</div>

							</li>
							<li>
								<div class="w3ls-info">
									<h4>Be fabulous. Be empowered. Be Blown Away!</h4>
									<p>Welcome to our Happy Marriage Center - keep in touch with us...</p>
								</div>

							</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- //banner-slider -->
			<div class="sim-button button12"><a href="about.php">More About Us</a></div>
			<div class="agileits-social">
				<ul>
					<li><a href="https://www.facebook.com/happymarriagecenterindia"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/happy.marriagecenter?igsh=MXA5eGx3NnE5MHJoYg=="><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.linkedin.com/in/happy-marriage-center/"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://x.com/HappyMarriageC2"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--//home-->
	<!--banner end here-->
	<!--//mobile-app -->
	<div class="elite-app">
		<div class="container">
			<div class="app-inner agile-w3l">
				<div class="col-md-6 app-info">
					<h4>Happy Marriage Center</h4>
					<p class="para-agileits-w3layouts">Welcome to our matrimonial platform, where love stories begin! We believe that every individual is unique, and finding the right partner is a journey worth taking. Our mission is to connect like-minded individuals who are ready to embark on the adventure of a lifetime together. Whether you’re looking for a deep emotional connection, shared values, or simply a companion to share life’s joys, our diverse profiles and personalized matchmaking process are designed to help you find your perfect match. Join us today and take the first step towards a beautiful future filled with love and companionship!</p>
					<p class="para-agileits-w3layouts"><a href="#">Click here </a>to know more about apps.</p>
				</div>
				<div class="main-app-img">
					<div class="col-md-6 app-img">
						<img id="img" src="images/google3.jpg" alt=" " class="img-responsive">
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//mobile-app -->

	<!-- about -->
	<div class="about-w3layouts" id="about">
		<div class="tittle-agileinfo">
			<h3>About Us</h3>
		</div>
		<div class="about-left-agileits">
			<div class="button">
				<a href="#small-dialog" class="play-icon popup-with-zoom-anim"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
			</div>
			<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
				<div class="agileits_modal_body">
					<iframe src="https://player.vimeo.com/video/198296034"></iframe>
				</div>
			</div>
		</div>
		<div class="about-right">
			<h3 class="subheading-agileits-w3layouts"><span>Happy Marriage </span>Find Success Stories</h3>
			<p class="para-agileits-w3layouts">Duis sit amet nisi quis leo fermentum vestibulum vitae eget augue. Nulla quam nunc, vulputate id urna at, tempor tincidunt metus. Sed feugiat quam nec mauris mattis malesuada.</p>
			<div class="sim-button button12"><a href="matches.php">View Profiles</a></div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //about-bottom -->
	<!--search-section -->
	<div class="search-wthree">
		<div class="container">
			<h3 class="subheading-agileits-w3layouts">Start your journey with confidence.</h3>
			<div class="sim-button button12"><a href="register.php">Register Now</a></div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//search-section -->
	<!--middle-section -->
	<div class="middle-section-agileits-w3layouts">
		<div class="container">
			<h3 class="subheading-agileits-w3layouts"><span>Happy </span>Marriage <span>Center</span></h3>
			<p class="para-w3layouts">Exclusive Matchmaking Service for our Members</p>
			<div class="sim-button button12"><a href="contact.php">Contact Us</a></div>
		</div>
	</div>
	<!--//middle-section -->
	<!--//mobile-app -->
	<div class="elite-app">
		<div class="container">
			<div class="app-inner agile-w3l">
				<div class="col-md-6 app-info">
					<h4>Safety & Privacy</h4>
					<p class="para-agileits-w3layouts">Your safety and privacy are our top priorities. We implement strict measures to protect your personal information and provide a safe environment for you to connect with others. Our team is dedicated to ensuring a respectful and secure experience for all members.</p>
				</div>
				<div class="main-app-img">
					<div class="col-md-5 app-img">
						<img id="img2" src="images/privacy.jpeg" alt=" " class="img-responsive">
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//mobile-app -->
	<!-- testimonials -->
	<div class="test" id="clients">
		<div class="container">
			<div class="tittle-agileinfo">
				<h3 class="white-w3ls">Happy Couples</h3>
			</div>
			<div class="test-gri1">
				<div id="owl-demo2" class="owl-carousel">
					<div class="test-grid1">
						<img src="images/t1.jpg" alt="" class="img-r">
						<h4>Abelard & Heloise</h4>
						<span>Couple 1</span>
						<p>Lorem ipsum dolor sit amet, Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
					</div>
					<div class="agile">
						<div class="test-grid1">
							<img src="images/t2.jpg" alt="" class="img-r">
							<h4>Bonnie & Clyde</h4>
							<span>Couple 2</span>
							<p>Lorem ipsum dolor sit amet, Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						</div>
					</div>
					<div class="agile">
						<div class="test-grid1">
							<img src="images/t3.jpg" alt="" class="img-r">
							<h4>Jack & Sally</h4>
							<span>Couple 3</span>
							<p>Lorem ipsum dolor sit amet, Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- //testimonials -->
	<!--/gallery-->
	<div class="gallery" id="gallery">
		<div class="tittle-agileinfo">
			<h3>Together by Happy Marriage Center</h3>
		</div>
		<ul id="flexiselDemo1">
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/g1.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/g1.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Bonnie <i class="fa fa-heart-o" aria-hidden="true"></i> Clyde</p>
							</div>
						</div>
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/g2.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<!-- <img src="images/g2.jpg" alt="" class="img-responsive" /> -->
							<div class="mask">
								<p>Abelard <i class="fa fa-heart-o" aria-hidden="true"></i> Heloise</p>
							</div>
						</div>
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/g3.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/g3.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Henry <i class="fa fa-heart-o" aria-hidden="true"></i> Clare</p>
							</div>
						</div>
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/g4.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/g4.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Jack <i class="fa fa-heart-o" aria-hidden="true"></i> Sally</p>
							</div>
						</div>
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/g5.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/g5.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Henry <i class="fa fa-heart-o" aria-hidden="true"></i> Clare</p>
							</div>
						</div>
					</a>
				</div>
			</li>
		</ul>


	</div>


	<!--//gallery-->
	<?php
	include 'footer.php';
	?>