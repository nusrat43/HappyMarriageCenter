<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT `Type` FROM `login` where id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$dbtype = $row['Type'];
if ($dbtype == 'Admin')
    $sql = "update login set Type='User' where id='$id'";
else
    $sql = "update login set Type='Admin' where id='$id'";
$conn->query($sql);
echo "<script>
         alert('Type changed successfully!'); 
         window.location='EditUserType.php'; 
      </script>";
