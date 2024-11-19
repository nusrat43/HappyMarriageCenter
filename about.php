<head>
	<title> About :: HappyMarriageCenter</title>

	<?php
	include 'header.php';
	?>
	<script>
	function CheckInputvalue() {
		error = 0;
		var vmobile = document.getElementById("mobile").value;
		if (vmobile == "") {

			document.getElementById("mobileresult").innerHTML = "<B><Font color=red>Mobile cannot be empty!</Font></B>";
			return false;
		} else {
			//The content should contain only digits
			var len = vmobile.length;
			if (len != 10) {
				document.getElementById("mobileresult").innerHTML = "<B><Font color=red>Mobile Number should be 10 digits!</Font></B>";
				return false;
			}

			for (var i = 0; i < len; i++) {
				var ch = vmobile.charAt(i); //9939802016
				if (ch >= '0' && ch <= '9') {
					//alert(ch + "allowed");
					document.getElementById("mobileresult").innerHTML = "";
				} else {
					// alert(ch + "not allowed");
					document.getElementById("mobileresult").innerHTML = "<B><Font color=red>Mobile can contain only digits!</Font></B>";
					return false;
				}
			}
		}
	}
</script>
</head>
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
	<div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>&#187;</span></li>

				<li>About</li>
			</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<!--team-->
<section class="w3ls-team text-center">
	<div class="container">
		<div class="tittle-agileinfo">
			<h3>Meet our team</h3>
		</div>
		<div class="team-row">
			<div class="col-md-3 w3ls-team-grids">
				<h5>Aamir Junaid Ahmad </h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur.</p>
				<div class="agileits-social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
				<div class="team-img">
					<img src="images/Mr. Aamir Junaid Ahmad.png" alt="">
				</div>
			</div>
			<div class="col-md-3 w3ls-team-grids team-mdl">
				<h5>Mr. Ashfi</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur.</p>
				<div class="agileits-social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
				<div class="team-img">
					<img src="images/Mr. Ashfi.jpeg" alt="">
				</div>
			</div>
			<div class="col-md-3 w3ls-team-grids team-mdl1">
				<h5>Mr. Zaid Alam</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur.</p>
				<div class="agileits-social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
				<div class="team-img">
					<img src="images/Mr. Zaid.jpg" alt="">
				</div>
			</div>
			<div class="col-md-3 w3ls-team-grids">
				<h5>Sally</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur.</p>
				<div class="agileits-social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
				<div class="team-img">
					<img src="images/team3.jpg" alt="">
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</section>
<!--//team-->


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
		<h3 class="subheading-agileits-w3layouts"><span>Happy Marriage Center </span>Find Success Stories</h3>
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
		<h3 class="subheading-agileits-w3layouts"><span>Happy Marriage </span> Center</h3>
		<p class="para-w3layouts">Exclusive Matchmaking Service for the Elite</p>
		<div class="sim-button button12"><a href="contact.php">Contact Us</a></div>
	</div>
</div>
<!--//middle-section -->
<!-- services -->
<div class="services" id="services">
	<div class="container">
		<div class="tittle-agileinfo">
			<h3>Assisted Services</h3>
		</div>
		<div class="col-md-6 w3_agileits_services_grids">
			<div class="w3_agileits_services_grid">
				<div class="w3_agileits_services_grid_agile">
					<div class="w3_agileits_services_grid_1">
						<i class="fa fa-search" aria-hidden="true"></i>
					</div>
					<h3>Search within reach</h3>
				</div>
			</div>
			<div class="w3_agileits_services_grid">
				<div class="w3_agileits_services_grid_agile">
					<div class="w3_agileits_services_grid_1">
						<i class="fa fa-list-alt" aria-hidden="true"></i>
					</div>
					<h3>Shortlisted matches</h3>
				</div>
			</div>
			<div class="w3_agileits_services_grid">
				<div class="w3_agileits_services_grid_agile">
					<div class="w3_agileits_services_grid_1">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<h3>Initiate communication</h3>
				</div>
			</div>
			<div class="w3_agileits_services_grid">
				<div class="w3_agileits_services_grid_agile">
					<div class="w3_agileits_services_grid_1">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div>
					<h3>Meet the prospects</h3>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 regstr-r-w3-agileits">
			<div class="form-bg-w3ls">
				<h3 class="subhead-agileits white-w3ls">Interested in assisted services....?</h3>
				<p class="para-agileits-w3layouts">Leave your details below, we'll call you back.</p>
				<form method="post" onsubmit="return CheckInputvalue()">
					<input type="text" name="Name" placeholder="Full name" required="">
					<input type="text" name="Mobile" placeholder="Mobile Number" required="" id="mobile"> <span id="mobileresult"></span>
					<input type="email" name="Email" placeholder="Email" required="">
					<textarea name="Address" placeholder="Enter your Address" required=""></textarea>
					<input type="submit" value="Submit" name="submit" class="button-w3layouts hvr-rectangle-out">
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //services -->
<?php
include 'config.php';


if (isset($_POST['submit'])) {
	$name = $_POST['Name'];
	$mobile = $_POST['Mobile'];
	$email = $_POST['Email'];
	$address = $_POST['Address'];
	$sql = "INSERT INTO `services`( `Name`, `Mobile`, `Email`, `Address`) VALUES ('$name','$mobile','$email','$address')";
	//echo  $sql;
	if ($conn->query($sql)) {
		echo "<script>
                   alert('Your details seved successfully!We will contact you shortly'); 
              </script>";
	} else {
		echo "<BR><BR> Error occured";
	}
}

?>
<?php
include 'footer.php';
?>