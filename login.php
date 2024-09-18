<head>
	<title> About :: HappyMarriageCenter</title>

	<?php
	include 'header.php';
	?>
	<script>
		let a = 1;

		function visible() {
			if (a == 1) {
				document.getElementById("pass").type = "text";
				document.getElementById("eye").src = "images/eye-slash-solid.svg";
				a = 0;
			} else {
				document.getElementById("pass").type = "password";
				document.getElementById("eye").src="images/eye-solid.svg";
				a = 1;
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

				<li>Login</li>
			</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<div class="login elite-app">
	<div class="container">
		<div class="tittle-agileinfo">
			<h3>Login Now</h3>
		</div>
		<div class="col-md-8 login-form-w3-agile">
			<form method="post">
				<div class="w3_form_body_grid">
					<span>UserEmial</span>
					<input type="email" name="Email" placeholder="Enter Your Email" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Password</span>
					<div style="display: flex; align-items: center;"  >
						<input type="password" placeholder="Password" style="flex: 1;" id="pass" name="Password">
						<img  onclick="visible()"  style="margin-left: -25px; margin-bottom :6px;" id="eye" src="images/eye-solid.svg"></img>
					</div>
				</div>
				<div class="agile_remember">
					<div class="agile_remember_left">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>remember me</label>
						</div>
					</div>
					<div class="agile_remember_right">
						<a href="#">Forgot Password?</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<input type="submit" name="submit">
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
			<h5>Don't have an account?<i class="fa fa-hand-o-down" aria-hidden="true"></i></h5>
			<div class="sim-button button12"><a href="register.php">Register</a></div>
		</div>
	</div>

</div>
<?php
include 'config.php'; // Include your database connection

if (isset($_POST['submit'])) {
    $formusername = $_POST['Email'];
    $formpassword = md5($_POST['Password']); // Use password_hash in production

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM login WHERE Email = ? AND Password = ?");
    $stmt->bind_param("ss", $formusername, $formpassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $_SESSION['Email'] = $formusername;
        $_SESSION['Type'] = $row['Type']; // Store user type in session

        if ($row['Type'] === 'Admin') {
			echo "<script>
			window.location='ViewAllUser.php'; 
		 </script>";
            exit();
        } else {
			echo "<script>
			window.location='index.php'; 
		 </script>"; // Redirect to user dashboard
            exit();
        }
    } else {
        echo "Wrong username or password!";
    }

    $stmt->close();
}
?>

<!--login-inner-->
<?php
include 'footer.php';
?>