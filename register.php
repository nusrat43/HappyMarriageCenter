<head>
	<title> About :: HappyMarriageCenter</title>

	<?php
	include 'header.php';
	?>
</head>
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
	<div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>&#187;</span></li>

				<li>Register</li>
			</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<div class="login elite-app">
	<div class="container">
		<div class="tittle-agileinfo">
			<h3>Register Now</h3>
		</div>
		<div class="col-md-8 login-form-w3-agile">
			<form method="post">
				<div class="w3_form_body_grid">
					<span>Profile For</span>
					<select id="w3_country" onchange="change_country(this.value)" class="frm-field required" name="Profile_for">
						<option value="null">Select</option>
						<option value="Myself">Myself</option>
						<option value="Son">Son</option>
						<option value="Daughter">Daughter</option>
						<option value="Brother">Brother</option>
						<option value="Sister">Sister</option>
						<option value="Relative">Relative</option>
						<option value="Friend">Friend</option>
					</select>
				</div>
				<div class="w3_form_body_grid">
					<span>Name</span>
					<input type="text" name="Name" placeholder="Name" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Gender</span>
					<div class="w3_gender">
						<div class="colr ert">
							<label class="radio"><input type="radio" name="Gender" checked="" value="Male">Male</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="Gender" value="Female">Female</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Date Of Birth</span>
					<input class="date" id="datepicker" name="DOB" type="text" value="dd/mm/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="">
				</div>
				<!-- <div class="w3_form_body_grid w3_form_body_grid1">
					<span>Date Of Birth</span>
					<input class="date" id="datepicker" name="DOB" type="text" value="yyyy/mm/dd"  required="">
				</div> -->
				<div class="w3_form_body_grid">
					<span>religion</span>
					<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required" name="Religion">
						<option value="Hindu">Hindu</option>
						<option value="Muslim">Muslim</option>
						<option value="Christian">Christian</option>
						<option value="Sikh">Sikh</option>
						<option value="Jain">Jain</option>
						<option value="Buddhist">Buddhist</option>
						<option value="No Religious Belief">No Religious Belief</option>
					</select>
				</div>
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Country</span>
					<input type="text" name="Country" placeholder="Country" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Email</span>
					<input type="email" name="Email" placeholder="Email" required="">
				</div>
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Password</span>
					<input type="password" name="Password" placeholder="Password" required="">
				</div>
				<input type="submit" value="Sign Up" name="submit">
			</form>
			<h4>Continue With</h4>
			<div class="social_icons agileinfo_social_asd">
				<!-- Facebook -->
				<a href="#" class="slide-social wthree_slide_social">
					<div class="button">5 Likes</div>
					<div class="facebook icon"> <i class="fa fa-facebook" aria-hidden="true"></i> </div>
					<div class="facebook slide">
						<p>Facebook</p>
					</div>
				</a>
				<!-- Twitter -->
				<a href="#" class="slide-social wthree_slide_social">
					<div class="button">8 Tweets</div>
					<div class="twitter icon"> <i class="fa fa-twitter" aria-hidden="true"></i> </div>
					<div class="twitter slide">
						<p>Twitter</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 login-right-info">
			<h3 class="subhead-agileits">Why Join Elite Match</h3>
			<p class="para-agileits-w3layouts">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<ul>
				<li><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>Vivamus lacus</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>quisquam est</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>Pellentesque</li>
			</ul>
			<h5>Already a member....<i class="fa fa-hand-o-down" aria-hidden="true"></i></h5>
			<div class="sim-button button12"><a href="login.php">Login</a></div>
		</div>
		<div class="col-md-4 login-right-info right-info-find">
			<h3 class="subhead-agileits">Easy steps to find your life partner</h3>
			<ul>
				<li><i class="fa fa-ellipsis-v" aria-hidden="true"></i>Vivamus lacus nisl, suscipit in vehicula sit amet, sollicitudin eget eros.</li>
				<li><i class="fa fa-ellipsis-v" aria-hidden="true"></i>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet.</li>
				<li><i class="fa fa-ellipsis-v" aria-hidden="true"></i>Vivamus lacus nisl, suscipit in vehicula sit amet, sollicitudin eget eros.</li>
			</ul>
		</div>
	</div>
</div>



<?php
include 'config.php';
if (isset($_POST['submit'])) {
	$profile_for=$_POST['Profile_for'];
	$name = $_POST['Name'];
	$gender = $_POST['Gender'];
	$Date_of_birth= $_POST['DOB'];
	$religion = $_POST['Religion'];
	$country = $_POST['Country'];
	$email = $_POST['Email']; //normal variable can be accessed only in one webpage
	$password = $_POST['Password'];
	$sql="INSERT INTO `register`(`Profile_For`, `Name`, `Gender`, `D_O_B`, `Religion`, `Country`, `Email`, `Password`) VALUES ('$profile_for','$name','$gender','$Date_of_birth','$religion','$country','$email','$password')";
	//echo  $sql;

	if ($conn->query($sql)) {
		$sql = "INSERT INTO `login`(`Email`, `Password`) VALUES ('$email','$password')";
		$conn->query($sql);
		echo "<script>
             alert('You have registered successfully! You may Login Now'); 
               window.location='login.php'; 
            </script>";
	} else {
		echo "<BR><BR> Error occured";
	}
	// echo "<script>alert('$Date_of_birth')</script>";
}

?>




<!--login-inner-->
<?php
include 'footer.php';
?>