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
	$sql = "SELECT `id`, `Profile_For`, `Name`, `Gender`, `D_O_B`, `Religion`,`Country`, `Email`,`Profile_Pic` FROM `register`";
	$result = $conn->query($sql);

	echo "<table  class='table table-striped'>";
	echo  "<tr><th>Delete</th><th> Edit </th><th> Profile For </th><th> Name </th><th> Gender </th><th> D.O.B </th><th> Religion </th><th> Country </th><th> Email </th><th> Photo </th></tr>";
	while ($row = $result->fetch_assoc()) {
		$id = $row['id'];
		$profile_for = $row['Profile_For'];
		$name = $row['Name'];
		$gender = $row['Gender'];
		$D_O_B = $row['D_O_B'];
		$religion = $row['Religion'];
		$country = $row['Country'];
		$email = $row['Email'];
		$filename = $row['Profile_Pic'];
		echo "<tr>";
		echo "
	<td> <a href=delete.php?id=$id><img src='images/delete.png'></a></td>
	<td><a href=adminEdit.php?id=$id><img src='images/edit.png'></a></td>
	<td>$profile_for</td><td>$name</td><td>$gender</td><td>$D_O_B</td><td>$religion</td><td>$country</td><td>$email</td>";
		// Conditional logic
		if (file_exists($filename)) {
			echo "<td><img src='$filename' height=100px width=100px ></td>";
		} else {
			echo "<td height=100px>No Photo available</td>";
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