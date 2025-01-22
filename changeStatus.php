<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT `Status` FROM `login` where id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$dbstatus = $row['Status'];
if ($dbstatus == 'Active')
    $sql = "update login set Status='Deactive' where id='$id'";
else
    $sql = "update login set Status='Active' where id='$id'";
$conn->query($sql);
echo "<script>
         alert('Status changed successfully!'); 
          window.location='Enable.php'; 
      </script>";
