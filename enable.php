
<head>
    <title> About :: HappyMarriageCenter</title>

    <?php
    include 'admin_header.php';
    ?>
</head>
<h3>&nbsp; Enable/Disable User:</h3>
<div style="padding: 10px;  overflow-x: scroll;
    -webkit-overflow-scrolling: touch;">

    <?php
    include 'config.php';
    $sql = "SELECT 
    login.id, 
    login.Status,
    register.Profile_For, 
    register.Name, 
    register.Gender, 
    register.D_O_B, 
    register.Religion, 
    register.Country, 
    register.Email,  
    login.Type
FROM 
    register
INNER JOIN 
    login 
ON 
    register.Email = login.Email;";
    $result = $conn->query($sql);
    //echo $sql;
    echo "<table class='table table-striped'>";
    echo  "<tr><th>Change Status</th><th>Status</th><th> Profile For </th><th> Name </th><th> Gender </th><th> D.O.B </th><th> Religion </th><th> Country </th><th> Email </th><th>Type</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $status = $row['Status'];
        $profile_for = $row['Profile_For'];
        $name = $row['Name'];
        $gender = $row['Gender'];
        $D_O_B = $row['D_O_B'];
        $religion = $row['Religion'];
        $country = $row['Country'];
        $email = $row['Email'];
        $type = $row['Type'];
        if ($status == 'Active')
            echo "<tr><td><a href=changeStatus.php?id=$id><img src=images/disable.png height=30 width=40></A></td><td>$status</td><td>$profile_for</td><td>$name</td><td>$gender</td><td>$D_O_B</td><td>$religion</td><td>$country</td><td>$email</td><td>$type</td></tr>";
        else
            echo "<tr><td><a href=changeStatus.php?id=$id><img src=images/enable.png height=30 width=40></A></td><td>$status</td><td>$profile_for</td><td>$name</td><td>$gender</td><td>$D_O_B</td><td>$religion</td><td>$country</td><td>$email</td><td>$type</td></tr>";
    }
    echo "</table>"
    ?>
</div>
<?php
include 'footer.php';
?>