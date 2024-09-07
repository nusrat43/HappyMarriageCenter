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
					<input type="password" name="Password" placeholder="Password" required="">
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
             if(isset($_POST['submit']))
             {
               
             include 'config.php';

             $formusername=$_POST['Email'];
             $formpassword=$_POST['Password'];

             $sql="select * from login where Email='".$formusername."' and Password='".$formpassword."'";
             $result=$conn->query($sql);
             
        
             if($result->fetch_assoc())
             {
             
				echo "<script>
				alert('You have Login successfully!'); 
				  window.location='index.php'; 
			   </script>";

             }
             else
             {
                echo "Wrong username or password!";
             }
            }
         ?>

<!--login-inner-->
<?php
include 'footer.php';
?>