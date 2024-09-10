<head>
	<title> About :: HappyMarriageCenter</title>

	<?php
	include 'header.php';
	?>
</head>
<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>&#187;</span></li>
									
				<li>View Profile</li>
				</ul>
		</div>
	</div>
</div>
<?php
   include 'config.php';
   $Email=$_SESSION['Email'];

   $sql = "SELECT  `Profile_For`, `Name`, `Gender`, `D_O_B`, `Religion`, `Country`,`Profile_Pic` FROM `register` where Email= '$Email'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $profile_For = $row['Profile_For'];
   $name = $row['Name'];
   $gender = $row['Gender'];
   $D_O_B = $row['D_O_B'];
   $religion = $row['Religion'];
   $country = $row['Country'];
$fliename = $row['Profile_Pic']
?>
<div class="matches elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
		<h3><?php echo $name?></h3>
	</div>
	<div class="matches-main-agileinfo">
		<div class="col-md-6 self-profile"> 
			<img src="<?php echo $fliename ?>" alt="" style="height:50%;width:100%">
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
				<li><span>Profile For</span><?php echo $profile_For ?></li>
				<li><span>Gender</span><?php echo $gender ?></li>
				<li><span>D.O.B</span><?php echo $D_O_B ?></li>
				<li><span>Religion</span><?php echo $religion ?></li>
				<li><span>Country</span><?php echo $country ?></li>
				<li><span>Email</span><?php echo $Email ?></li>
				
			</ul>
		</div>
		<div class="clearfix"> </div>
		
	</div>
		
		
		
	</div>
</div>
<?php
include 'footer.php' ;
?>