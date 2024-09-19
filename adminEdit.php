
<head>
    <title> About :: HappyMarriageCenter</title>

    <?php
    include 'admin_header.php';
    ?>
</head>
<div class="login elite-app">
    <div class="container">
        <?php
        include 'config.php';
        $id = $_GET['id'];
        $sql = "SELECT  `Profile_For`, `Name`, `Gender`, `D_O_B`, `Religion`, `Country`,`Email` FROM `register` where id= '$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $profile_For = $row['Profile_For'];
        $name = $row['Name'];
        $gender = $row['Gender'];
        $D_O_B = $row['D_O_B'];
        $religion = $row['Religion'];
        $country = $row['Country'];
        $email = $row['Email'];
        ?><div class="tittle-agileinfo">
            <h3>Edit Details For <?php echo $name ?></h3>
        </div>
        <div class="edit" style="align-items: center;">
            <div class="edit  login-form-w3-agile">
                <form method="post">
                    <div class="w3_form_body_grid">
                        <span>Profile For</span>
                        <select id="w3_country" onchange="change_country(this.value)" class="frm-field required" name="Profile_for">
                            <option selected="selected" value='<?php echo $profile_For; ?>'><?php echo $profile_For; ?></option>
                            <option value="Myself">Myself</option>
                            <option value="Son">Son</option>
                            <option value="Daughter">Daughter</option>
                            <option value="Brother">Brother</option>
                            <option value="Sister">Sister</option>
                            <option value="Relative">Relative</option>
                            <option value="Friend">Friend</option>
                        </select>
                    </div>
                    <div class="w3_form_body_grid">
                        <span>Name</span>
                        <input type="text" name="Name" placeholder="Name" value='<?php echo $name; ?>' required="">
                    </div>
                    <div class="w3_form_body_grid">
                        <span>Gender</span>
                        <div class="w3_gender">
                            <div class="colr ert">
                                <label class="radio"><input type="radio" name="Gender" checked="" value="Male">Male</label>
                            </div>
                            <div class="colr">
                                <label class="radio"><input type="radio" name="Gender" value="Female">Female</label>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3_form_body_grid w3_form_body_grid1">
                        <span>Date Of Birth</span>
                        <input class="date" id="datepicker" name="DOB" type="text" value='<?php echo $D_O_B; ?>' onfocus="this.value = '';" onblur="if (this.value == '') {this.value='<?php echo $D_O_B; ?>';}" required="">
                    </div>
                    <!-- <div class="w3_form_body_grid w3_form_body_grid1">
					<span>Date Of Birth</span>
					<input class="date" id="datepicker" name="DOB" type="text" value="yyyy/mm/dd"  required="">
				</div> -->
                    <div class="w3_form_body_grid">
                        <span>religion</span>
                        <select id="w3_country1" onchange="change_country(this.value)" class="frm-field required" name="Religion">
                            <option selected="selected" value='<?php echo $religion; ?>'><?php echo $religion; ?></option>
                            <option value="Hindu">Hindu</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Christian">Christian</option>
                            <option value="Sikh">Sikh</option>
                            <option value="Jain">Jain</option>
                            <option value="Buddhist">Buddhist</option>
                            <option value="No Religious Belief">No Religious Belief</option>
                        </select>
                    </div>
                    <div class="w3_form_body_grid w3_form_body_grid1">
                        <span>Country</span>
                        <input type="text" name="Country" placeholder="Country" required="" value='<?php echo $country; ?>'>
                    </div>
                    <div class="w3_form_body_grid">
                        <span>Email</span>
                        <input type="email" name="Email" placeholder="Email" required="" value='<?php echo $email; ?>'>
                    </div>
                    <input type="submit" value="Edit" name="submit">
                </form>
                <?php
                include 'config.php';
                if (isset($_POST['submit'])) {
                    $Email = $_SESSION['Email'];
                    $profile_for = $_POST['Profile_for'];
                    $name = $_POST['Name'];
                    $gender = $_POST['Gender'];
                    $Date_of_birth = $_POST['DOB'];
                    $religion = $_POST['Religion'];
                    $country = $_POST['Country'];
                    $email = $_POST['Email'];
                    $sql = "UPDATE `register` SET `Profile_For`='$profile_for' ,`Name`='$name',`Gender`='$gender',`Email`='$email',`D_O_B`='$Date_of_birth',`Religion`='$religion' , `Country`='$country' where id='$id'";
                    //echo  $sql;

                    if ($conn->query($sql)) {
                        $sql = "UPDATE `login` SET `Email`='$email' where id='$id'";
                        $conn->query($sql);
                        echo "<script>
                                         alert('Updated successfully!'); 
                                         window.location='ViewAllUser.php'; 
                                      </script>";
                    } else {
                        echo "<BR><BR> Error occured";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>