<?php
include 'config.php';
$id = intval($_GET['id']);

$sql = "SELECT  `caste`  FROM `register` WHERE id= '".$id."'";
$result = $conn->query($sql);


if($row =$result->fetch_assoc()){
    echo $row['caste'];
}


?>