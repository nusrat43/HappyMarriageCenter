<head>
	<title> About :: HappyMarriageCenter</title>

	<?php
	include 'header.php';
	?>
	<script>
		let a = 1;

		function visible1() {
			if (a == 1) {
				document.getElementById("oldPass").type = "text";
				document.getElementById("eye1").src = "images/eye-slash-solid.svg";
				a = 0;
			} else {
				document.getElementById("oldPass").type = "password";
				document.getElementById("eye1").src="images/eye-solid.svg";
				a = 1;
			}
		}

        let b = 1;

function visible2() {
    if (b == 1) {
        document.getElementById("newPass1").type = "text";
        document.getElementById("eye2").src = "images/eye-slash-solid.svg";
        b = 0;
    } else {
        document.getElementById("newPass1").type = "password";
        document.getElementById("eye2").src="images/eye-solid.svg";
        b = 1;
    }
}
	</script>
</head>
<!-- breadcrumbs -->
<!-- //breadcrumbs -->
<div class="login elite-app">
	<div class="container">
		<div class="tittle-agileinfo">
			<h3>Change Password For  <?php
      $username1 = $_SESSION['Email'];
      echo $username1;
      ?></h3>
		</div>
		<div class=" edit col-md-10 login-form-w3-agile">
			<form method="post">
				<div class="w3_form_body_grid">
					<span>Old Password</span>
					<div style="display: flex; align-items: center;"  >
						<input type="password" placeholder=" Enter Your Old Password" style="flex: 1;" id="oldPass" name="oldPass">
						<img  onclick="visible1()"  style="margin-left: -25px; margin-bottom :6px;" id="eye1" src="images/eye-solid.svg"></img>
					</div>
                </div>
				<div class="w3_form_body_grid">
					<span> New Password</span>
					<div style="display: flex; align-items: center;"  >
						<input type="password" placeholder=" Enter Your New Password" style="flex: 1;" id="newPass1" name="newPass1">
						<img  onclick="visible2()"  style="margin-left: -25px; margin-bottom :6px;" id="eye2" src="images/eye-solid.svg"></img>
					</div>
				</div>
                <div class="w3_form_body_grid">
					<span>Confirm Password</span>
					<input type="password" name="newPass2" placeholder="Enter Your Confirm Password" id="newPass2" style="flex: 1;" id="pass" name="Password" required="">
				</div>
				<input type="submit" name="submit">
			</form>
		</div>
	</div>

</div>
<?php
   if (isset($_POST['submit'])) {

      include 'config.php';
      $oldpassword = md5($_POST['oldPass']);
      $newpassword = md5($_POST['newPass1']);
      $sql = "select * from login where Email='".$username1."'and Password='".$oldpassword."'";
      $result = $conn->query($sql);
      //echo $sql;

      if ($row = $result->fetch_assoc()) //record exist
      {
         $sql = "update login set Password='$newpassword' where Email='" .$username1. "'";
         $conn->query($sql);
         //echo $sql;
         echo "<script>alert('Password changed successfully!'); window.location='login.php'; </script>";
      } else {
         echo "Wrong username and Password! ";
      }
   }
   ?>

<!--login-inner-->
<?php
include 'footer.php';
?>