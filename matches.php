
<head>
	<title> About :: HappyMarriageCenter</title>


	<?php
	include 'admin_header.php';
	?>



</head>
<!-- breadcrumbs -->
<!-- <div class="w3l_agileits_breadcrumbs">
	<div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>&#187;</span></li>

				<li>Matches</li>
			</ul>


		</div>
	</div>
</div> -->




<?php

include 'config.php';


$sql = "SELECT `id`, `Name`, `Gender`, `Age`, `Height`, `Religion`, `caste`, `Marital_status`, `Profile_For`,`creator_name`, `Profession`, `Country`,`city`,`MobileNo`, `About`, `Photo`, `Education`, `Diet`, `Language`, `Blood_Group`, `Complexion`, `Weight`, `F_Name`, `F_Occu`, `M_Name`, `M_Occu`, `No_Brothers`, `No_Sisters`, `I_age`, `I_MaritalStatus`, `I_Complexion`, `I_Height`, `I_Religion`, `I_Caste`, `I_Diet` FROM `profile`";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {

	$id=$row['id'];
	$name = $row['Name'];
	$gender = $row['Gender'];
	$Age = $row['Age'];
	$height = $row['Height'];
	$religion = $row['Religion'];
	$caste = $row['caste'];
	$marital_status = $row['Marital_status'];
	$profile_for = $row['Profile_For'];
	$creator = $row['creator_name'];
	$profession = $row['Profession'];
	$country = $row['Country'];
	$city = $row['city'];
	$mobile=$row['MobileNo'];
	$about = $row['About'];
	$photo = $row['Photo'];
	// ----- breadcrumbs  ---- 
	echo "<div class='matches elite-app'>
	<div class='container'>
	<div class='tittle-agileinfo'>
		<h3>$name</h3>
	</div>
	";

	echo "<div class='col-md-6' > 
		<img src = '$photo' style='width: 350px; height:350px;'class='blurred-image' >
			
		</div>
		<div class='col-md-6 person-info-agileits-w3layouts'>
			<ul>";

	echo "<li><span>Age</span>:$Age</li>
				<li><span>Height</span>: $height</li>
				<li><span>Caste</span>:$caste</li>
				<li><span>Religion</span>:$religion</li>
				<li><span>Profession</span>: $profession</li>
				<li><span>Marital Status</span>: $marital_status</li>
				<li><span>Profile Created By</span>:$profile_for</li>
				<li><span>Profile Creator Name</span>:  $creator</li>
				<li><span>Contact Number</span>:  $mobile</li>
				<li><span>City</span>: $city</li>
				<li><span>Country</span>: $country</li>
				<li><a href='single1.php?id=$id'>Express Interest</a><a href='single1.php'>Send mail</a></li>";
	echo "</ul>
		</div>
		<div class='clearfix'> </div>
		<div class='about-person'>
			<h6>About Myself:</h6>";

	echo "<p class='para-agileits-w3layouts'><span>Hi!, $name </span>$about</p>
			<div class='sim-button button12'><a href=single1.php?id=$id>Read More</a></div>";

	echo "</div>
		<div class='matches-main-agileinfo'>
	</div>
	
	</div>
</div>";
}

?>




<?php
include 'footer.php';
?>