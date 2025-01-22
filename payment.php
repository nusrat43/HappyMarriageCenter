<head>
	<title> About :: HappyMarriageCenter</title>

	<?php
	include 'header.php';
	?>
	<?php $email=$_GET['Email']; 
	?>
	<style>
		.payment-membership {
			display: flex;
			justify-content: center;
			padding: 20px;
		}

		.login-right-info {
			width: fit-content;
			margin: 0 10px;
		}

		.payment {
			display: flex;
			justify-content: center;
			margin-bottom: 20px;
		}

		.payment img {
			height: 60%;
			width: 50%;
		}

		.payment-form {
			display: flex;
			justify-content: start;
			padding-left: 27%;
			width: 100%;
		}

		table {
			width: 700px;
			height: 200px;
		}

		@media screen and (max-width: 700px) {
			.payment-membership {
				display: flex;
				flex-wrap: wrap;
				justify-content: center;
				margin: 5px 0;
				padding: 20px;
			}

			.login-right-info {
				width: fit-content;
				margin: 5px 10px;
			}

			.payment img {
				height: 100%;
				width: 90%;

			}

			.payment {
				display: flex;
				justify-content: center;
				margin-bottom: 5px
			}

			.payment-form {
				display: flex;
				justify-content: start;
				padding-left: 3%;
			}

			table {
				width: 150px;
				height: 200px;
			}
		}
	</style>
</head>
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
	<div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>&#187;</span></li>

				<li>Payment</li>
			</ul>
		</div>

	</div>
</div>
<div class="payment-membership">
	<div class="col-md-4 login-right-info">
		<h2 class="subhead-agileits" style="color: goldenrod;text-align:center;"><b>Gold Membership</b></h2>
		<h3 align=center> Charges : 8000 &#8377;</h3>
		<h4 align=center>Duration : 3 Years</h4>
		<ul>
			<li><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum</li>
			<li><i class="fa fa-check" aria-hidden="true"></i>Vivamus lacus</li>
			<li><i class="fa fa-check" aria-hidden="true"></i>quisquam est</li>
			<li><i class="fa fa-check" aria-hidden="true"></i>Pellentesque</li>
		</ul>
		<h5>Already a member....<i class="fa fa-hand-o-down" aria-hidden="true"></i></h5>
		<div class="sim-button button12"><a href="login.php">Login</a></div>
	</div>
	<div class="col-md-4 login-right-info">
		<h2 class="subhead-agileits" style="color:cornflowerblue;text-align:center;"><b>Silver Membership</b></h2>
		<h3 align=center>Charges : 5000 &#8377;</h3>
		<h4 align=center>Duration : 2 Years</h4>
		<ul>
			<li><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum</li>
			<li><i class="fa fa-check" aria-hidden="true"></i>Vivamus lacus</li>
			<li><i class="fa fa-check" aria-hidden="true"></i>quisquam est</li>
			<li><i class="fa fa-check" aria-hidden="true"></i>Pellentesque</li>
		</ul>
		<h5>Already a member....<i class="fa fa-hand-o-down" aria-hidden="true"></i></h5>
		<div class="sim-button button12"><a href="login.php">Login</a></div>
	</div>
</div>
<div class="payment" style="display: flex;justify-content:center">
	<img src="images/payment.jpg" alt="">
</div>
<div class="payment-form">
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>

				<td>
					<label for="Type">Membership</label>
				</td>
				<td>
					<select id="w3_country1" class="frm-field required" name="Membership">
						<option value="Gold">Gold</option>
						<option value="Silver">Silver</option>
					</select>
				</td>
			</tr>
			<tr>

				<td>
					<label for="screenshot">Screenshot</label>
				</td>
				<td>
					<input type="file" name="Screenshot" id="screenshot" required>
				</td>
			</tr>
			<tr><td></td>
				<td><input type="submit" value="Submit" name="submit"></td>
			</tr>

		</table>
	</form>
</div>
<?php
include 'config.php';


if (isset($_POST['submit'])) {

	/////////////////Phot Upload Code

	$target_dir = "uploads/"; // Specify the directory where the file will be uploaded
	$target_file = $target_dir . basename($_FILES["Screenshot"]["name"]);
	$uploadOk = 1;
	$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}

	// Check file size (limit to 5MB)
	if ($_FILES["fileToUpload"]["size"] > 5000000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}

	// Allow certain file formats
	$allowedTypes = array("jpg", "png", "jpeg", "gif");
	if (!in_array($fileType, $allowedTypes)) {
		echo "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed.";
		$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	} else {
		// If everything is ok, try to upload the file
		if (move_uploaded_file($_FILES["Screenshot"]["tmp_name"], $target_file)) {
			echo "The file " . htmlspecialchars(basename($_FILES["Screenshot"]["name"])) . " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}

	
	$membership= $_POST['Membership'];

	$sql = "UPDATE `register` SET `Membership`='$membership',`Screenshot`='$target_file' WHERE  Email='$email'";

		if($conn->query($sql)){
		echo "<script>
             alert('Your payment has done successfully!'); 
               window.location='login.php'; 
            </script>";
	} else {
		echo "<BR><BR> Error occured";
	}
}

?>


<?php
include 'footer.php';
?>