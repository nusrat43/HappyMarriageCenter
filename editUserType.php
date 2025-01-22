
<head>
    <title> About :: HappyMarriageCenter</title>

    <?php
    include 'admin_header.php';
    ?>
</head>
<h3>&nbsp; Edit User Type:</h3>
<div style="padding: 10px;  overflow-x: scroll;
    -webkit-overflow-scrolling: touch;">

    <?php
    include 'config.php';
    $sql = "SELECT 
    login.id, 
    login.status,
    register.Profile_For, 
    register.Name, 
    register.Gender, 
    register.D_O_B, 
    register.Religion, 
    register.Country, 
    register.Email,  
    login.type
FROM 
    register
INNER JOIN 
    login 
ON 
    register.Email = login.Email;";
    $result = $conn->query($sql);
    //echo $sql;
    echo "<table class='table table-striped'>";
    echo  "<tr><th>status</th><th> Profile For </th><th> Name </th><th> Gender </th><th> D.O.B </th><th> Religion </th><th> Country </th><th> Email </th><th>Type</th><th>Change Type</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $status = $row['status'];
        $profile_for = $row['Profile_For'];
        $name = $row['Name'];
        $gender = $row['Gender'];
        $D_O_B = $row['D_O_B'];
        $religion = $row['Religion'];
        $country = $row['Country'];
        $email = $row['Email'];
        $type = $row['type'];
        if ($type == 'Admin')
            echo "<tr><td>$status</td><td>$profile_for</td><td>$name</td><td>$gender</td><td>$D_O_B</td><td>$religion</td><td>$country</td><td>$email</td><td>$type</td><td><a href=changeType.php?id=$id><img src=images/user.png height=30 width=40></a></td></tr>";
        else
            echo "<tr><td>$status</td><td>$profile_for</td><td>$name</td><td>$gender</td><td>$D_O_B</td><td>$religion</td><td>$country</td><td>$email</td><td>$type</td><td><a href=changeType.php?id=$id><img src=images/admin.png height=30 width=40></a></td></tr>";
    }
    echo "</table>"
    ?>
</div>
<?php
include 'footer.php';
?>