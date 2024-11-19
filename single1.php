<head>
	<title> About :: HappyMarriageCenter</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


	<?php include 'admin_header.php' ?>
</head>
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
	<div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>&#187;</span></li>

				<li>Single</li>
			</ul>
		</div>

	</div>
</div>


<?php

include 'config.php';
$id = $_GET['id'];

$sql = "SELECT `Name`, `Gender`, `Age`, `Height`, `Religion`, `caste`, `Marital_status`, `Profile_For`,`creator_name`, `Profession`, `Country`,`city`, `MobileNo`,`About`, `biodata`, `Photo`, `Education`, `Diet`, `Language`, `Blood_Group`, `Complexion`, `Weight`, `F_Name`, `F_Occu`, `M_Name`, `M_Occu`, `No_Brothers`, `No_Sisters`, `I_age`, `I_MaritalStatus`, `I_Complexion`, `I_Height`, `I_Religion`, `I_Caste`, `I_Diet` FROM `profile` WHERE id=$id";

$result = $conn->query($sql);
echo "<div class='matches elite-app'>
	<div class='container'>
	<div class='tittle-agileinfo'>";
while ($row = $result->fetch_assoc()) {

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
	$biodata = $row['biodata'];
	$photo = $row['Photo'];
	$Education = $row['Education'];
	$Diet = $row['Diet'];
	$Language = $row['Language'];
	$BloodGroup = $row['Blood_Group'];
	$Complexion = $row['Complexion'];
	$Weight = $row['Weight'];
	$Father_Name = $row['F_Name'];
	$Father_Occu = $row['F_Occu'];
	$Mother_Name = $row['M_Name'];
	$Mother_Occu = $row['M_Occu'];
	$No_Brother = $row['No_Brothers'];
	$No_Sister = $row['No_Sisters'];
	$I_Age = $row['I_age'];
	$I_Maritalstatus = $row['I_MaritalStatus'];
	$I_Complexion = $row['I_Complexion'];
	$I_Height = $row['I_Height'];
	$I_religion = $row['I_Religion'];
	$I_Caste = $row['I_Caste'];
	$I_diet = $row['I_Diet'];


	echo "<h3> $name</h3> </div>
	<div class='matches-main-agileinfo'>
		<div class='col-md-6 '>
		 <img src='$photo' style='width: 350px; height:450px'>
			
		</div>
		<div class='col-md-6 person-info-agileits-w3layouts'>
			<ul>";

	echo "<li><span>Age / Height</span>: $Age</li>
				<li><span>Height</span>: $height</li>
				<li><span>Caste</span>: $caste</li>
				<li><span>Religion</span>: $religion</li>
				<li><span>Profession</span>: $profession</li>
				<li><span>Marital Status</span>: $marital_status</li>
				<li><span>Profile Created By</span>:  $profile_for</li>
				<li><span>Profile Creator Name</span>:  $creator</li>
				<li><span>Contact Number</span>:  $mobile</li>
				<li><span>City</span>: $city</li>
				<li><span>Country</span>: $country</li>
				<li class='pdf'><span>To View Her Biodata</span>:<a href='$biodata'><img src='images/pdf-icon.png'></li>";
	echo "</ul> </div>
		<div class='clearfix'> </div>
		<div class='about-person'>
			<h6>About Myself:</h6>
			<p class='para-agileits-w3layouts'><span>Hi!, $name </span>$about</p>
		</div>
	</div>
		<div class='col-md-6 person-info-agileits-w3layouts'>
			<h3>Education, Basics & Lifestyle</h3>
			<ul>";

	echo "	<li><span>Education</span>: $Education</li>
				<li><span>Profession</span>: $profession</li>
				<li><span>Mother Tongue</span>: $Language</li>
				<li><span>Blood Group</span>:  $BloodGroup</li>
				<li><span>Complexion</span>:  $Complexion</li>
				<li><span>Weight</span>:  $Weight</li>
				<li><span>Diet</span>:  $Diet</li>";
	echo "</ul>
		</div>
		<div class='col-md-6 person-info-agileits-w3layouts'>
			<h3>Family Details</h3>
			<ul>";
	echo "<li><span>Fathers Name</span>:  $Father_Name</li>
				<li><span>Fathers Occupation</span>: $Father_Occu</li>
				<li><span>Mothers Name</span>: $Mother_Name</li>
				<li><span>Mothers Occupation</span>:  $Mother_Occu</li>
				<li><span>No. Of Brothers</span>: $No_Brother</li>
				<li><span>No. Of Sisters</span>: $No_Sister</li>";
	echo "</ul>
		</div>
		<div class='col-md-6 person-info-agileits-w3layouts'>
			<h3>What You Is Looking For</h3>
			<ul>";

	echo "	<li><span>Age</span>:$I_Age</li>
				<li><span>Marital Status</span>: $I_Maritalstatus</li>
				<li><span>Complexion</span>:  $I_Complexion</li>
				<li><span>height</span>:$I_Height</li>
				<li><span>Caste</span>: $I_Caste</li>
				<li><span>Religion</span>: $I_religion </li>
				<li><span>Diet</span>:  $I_diet</li>";
	echo "</ul>
		</div>
	</div>
</div>";
}
?>
<!-- //breadcrumbs -->

<!--login-inner-->



<?php
include 'footer.php';
?>