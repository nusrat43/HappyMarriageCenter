
<head>
	<title> About :: HappyMarriageCenter</title>

	<?php
	include 'admin_header.php';
	?>
</head>
<h3>&nbsp; View All Users:</h3>
<div style="padding: 10px;  overflow-x: scroll;
    -webkit-overflow-scrolling: touch;">
	<?php

	include 'config.php';
	$sql = "SELECT `id`, `Name`,`Religion`, `MobileNo`,`Email`,`Profile_Pic`,`Membership`,`Screenshot` FROM `register`";
	$result = $conn->query($sql);
 
	echo "<table  class='table table-striped'>";
	echo  "<tr><th>Delete</th><th> Edit </th><th> Name </th><th> Religion </th><th> Mobile</th><th> Email </th><th> Membership </th><th> Photo </th><th> Payment Screenshot </th></tr>";
	while ($row = $result->fetch_assoc()) {
		$id = $row['id'];
		// $profile_for = $row['Profile_For'];
		$name = $row['Name'];
		// $gender = $row['Gender'];
		// $D_O_B = $row['D_O_B'];
		$religion = $row['Religion'];
		// $country = $row['Country'];
		$mobile = $row['MobileNo'];
		$email = $row['Email'];
		$membership = $row['Membership'];
		$filename = $row['Profile_Pic'];
		$filename_Screenschot = $row['Screenshot'];
		echo "<tr>";
		echo "
	<td> <a href=delete.php?id=$id><img src='images/delete.png'></a></td>
	<td><a href=adminEdit.php?id=$id><img src='images/edit.png'></a></td>
	<td>$name</td><td>$religion</td><td>$mobile</td><td>$email</td>";
		// Conditional logic
		if (empty($membership)) {
			echo "<td> No Membership</td>";
		} else {
			echo "<td>  $membership</td>";
		}
		if (file_exists($filename)) {
			echo "<td><img src='$filename' height=100px width=100px ></td>";
		} else {
			echo "<td height=100px>No Photo available</td>";
		}
		if (file_exists($filename_Screenschot)) {
			echo "<td><img src='$filename_Screenschot' height=100px width=100px ></td>";
		} else {
			echo "<td height=100px>No Screenshot</td>";
		}
		// End table row
		echo "</tr>";
	}
	echo "</table>"
	?>

</div>
<?php
include 'footer.php';
?>