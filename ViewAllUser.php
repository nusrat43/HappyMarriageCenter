<?php

session_start();
// Function to check if the user is an admin
function checkAdminAccess() {
    if (!isset($_SESSION['Type']) || $_SESSION['Type'] !== 'Admin') {
        header('Location:unauthorized.php'); // Redirect to unauthorized page
        exit();
    }
}

checkAdminAccess(); // Check access before displaying the page
?>
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
	$sql = "SELECT `id`, `Profile_For`, `Name`, `Gender`, `D_O_B`, `Religion`,`Country`, `Email`,`Profile_Pic`,`Membership`,`Screenshot` FROM `register`";
	$result = $conn->query($sql);

	echo "<table  class='table table-striped'>";
	echo  "<tr><th>Delete</th><th> Edit </th><th> Profile For </th><th> Name </th><th> Gender </th><th> D.O.B </th><th> Religion </th><th> Country </th><th> Email </th><th> Membership </th><th> Photo </th><th> Payment Screenshot </th></tr>";
	while ($row = $result->fetch_assoc()) {
		$id = $row['id'];
		$profile_for = $row['Profile_For'];
		$name = $row['Name'];
		$gender = $row['Gender'];
		$D_O_B = $row['D_O_B'];
		$religion = $row['Religion'];
		$country = $row['Country'];
		$email = $row['Email'];
		$membership = $row['Membership'];
		$filename = $row['Profile_Pic'];
		$filename_Screenschot = $row['Screenshot'];
		echo "<tr>";
		echo "
	<td> <a href=delete.php?id=$id><img src='images/delete.png'></a></td>
	<td><a href=adminEdit.php?id=$id><img src='images/edit.png'></a></td>
	<td>$profile_for</td><td>$name</td><td>$gender</td><td>$D_O_B</td><td>$religion</td><td>$country</td><td>$email</td>";
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