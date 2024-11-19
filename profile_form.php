<html>

<head>
    <title> About :: HappyMarriageCenter</title>

    <?php
    include 'header.php';
    ?>

    <style>
        form {
            max-width: 1000px;
            margin: 0 auto;
        }

        /* fieldset {
        margin-top: 30px;
        border: 2px solid #007bff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
    }

    legend {
        font-size: 1.5em;
        color: #d9534f;
        text-align: center;
    } */

        .form-row {
            display: flex;
            justify-content: space-around;
            margin-bottom: 15px;
        }

        .form-group {
            width: 48%;
            /* Adjust width for two inputs side by side */
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group span {
            font-weight: bold;

        }

        .form-group input {
            /* width: 100%; */
            padding: 10px;
            border: 1px solid #ccc;
            /* border-radius: 4px; */
            box-sizing: border-box;
        }

        .w3_gender input {
            margin-left: 20px;
        }
    </style>

</head>

<body>
    <div class="w3l_agileits_breadcrumbs">
        <div class="container">
            <div class="w3l_agileits_breadcrumbs_inner">
                <ul>
                    <li><a href="index.php">Home</a><span>&#187;</span></li>

                    <li>Edit Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login elite-app">
        <div class="container">
            <div class="tittle-agileinfo">
                <h3>Create Your Profile</h3>
            </div>

            <div class="edit" style="align-items: center;">
                <div class="edit  login-form-w3-agile">
                    <form method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend>
                                <h3>Personal info</h3>
                            </legend>
                        </fieldset>


                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name : </label>
                                <input type="text" name="Name" placeholder="Name" value='' id="name" required="">
                            </div>
                            <div class="form-group w3_form_body_grid">
                                <span for="profession">Gender :</span>
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
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="age">Age :</label>
                                <input type="text" id="age" name="age" placeholder="Enter your age">
                            </div>
                            <div class="form-group">
                                <label for="height">Height :</label>
                                <input type="text" id="height" name="height" placeholder="Enter height">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="Marital_status">religion :</label>
                                <select id="w3_country1" onchange="change_country(this.value)" class="frm-field required" name="Religion">
                                    <option selected="selected" value=''></option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Muslim">Muslim</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Sikh">Sikh</option>
                                    <option value="Jain">Jain</option>
                                    <option value="Buddhist">Buddhist</option>
                                    <option value="No Religious Belief">No Religious Belief</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="caste">Caste :</label>
                                <input type="text" name="caste" placeholder="caste" required="" value=''>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="marital_status">Marital Status :</label>
                                <input type="text" id="marital_status" name="marital_status" placeholder="Enter your Marital Status">
                            </div>
                            <div class="form-group">
                                <label for="profession">Profession : </label>
                                <input type="text" id="profession" name="profession" placeholder="Enter your Profession">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="Profile_create">Profile Created By :</label>
                                <select id="Profile_create" onchange="change_country(this.value)" class="frm-field required" name="profile_for">
                                    <option selected="selected"></option>
                                    <option value="Myself">Myself</option>
                                    <option value="Father">Father</option>
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="Relative">Relative</option>
                                    <option value="Friend">Friend</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="creator_name">Creator Name :</label>
                                <input type="text" name="creator_name" placeholder="creater name" id="creator_name" required="" value=''>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="country">Country :</label>
                                <input type="text" name="country" placeholder="country" required="" value=''>
                            </div>
                            <div class="form-group">
                                <label for="city">City :</label>
                                <input type="text" name="city" placeholder="city" required="" value=''>
                            </div>
                        </div>

                        <div class="form-row">
                        <div class="form-group">
                                <label for="mobile">Contact No :</label>
                                <input type="text" name="mobile" required="" value='' placeholder="Contact Number" id="mobile">
                            </div>
                            <div class="form-group">
                                <label for="message">About Your Self : </label>
                                <textarea name="message" placeholder="message" required="" id="message"></textarea>
                            </div>
                           
                        </div>
                        <div class="form-row">
                        <div class="form-group">
                                <label for="photo">Your Photo :</label>
                                <input type="file" name="fileToUpload" required="" value='' id="photo">
                            </div>
                        <div class="form-group">
                                <label for="biodata">Your Resume :</label>
                                <input type="file" name="biodata" required="" value='' id="biodata">
                            </div>
                           
                        </div>

                        <fieldset>
                            <legend>
                                <h3>Education, Basics & Lifestyle</h3>
                            </legend>
                        </fieldset>



                        <div class="form-row">
                            <div class="form-group">
                                <label for="education">Education :</label>
                                <input type="text" id="education" name="education" placeholder="Enter education">
                            </div>
                            <div class="form-group">
                                <label for="diet">Diet :</label>
                                <input type="text" id="diet" name="diet" placeholder="Enter Diet">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="motherTongue">Mother Tongue :</label>
                                <input type="text" id="motherTongue" name="motherTongue" placeholder="Enter mother tongue">
                            </div>
                            <div class="form-group">
                                <label for="bloodGroup">Blood Group :</label>
                                <input type="text" id="bloodGroup" name="bloodGroup" placeholder="Enter blood group">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="complexion">Complexion :</label>
                                <input type="text" id="complexion" name="complexion" placeholder="Enter Complexion">
                            </div>
                            <div class="form-group">
                                <label for="weight">Weight :</label>
                                <input type="text" id="weight" name="weight" placeholder="Enter weight">
                            </div>
                        </div>



                        <fieldset>
                            <legend>
                                <h3>Family Details</h3>
                            </legend>
                        </fieldset>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="father_name">Father's Name :</label>
                                <input type="text" id="father_name" name="father_name" placeholder="Enter Father name">
                            </div>
                            <div class="form-group">
                                <label for="F_Occupation">Father's Occupation :</label>
                                <input type="text" id="F_Occupation" name="F_Occupation" placeholder="Enter Father Occupation">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="mother_name">Mother's Name :</label>
                                <input type="text" id="mother_name" name="mother_name" placeholder="Enter Mother name">
                            </div>
                            <div class="form-group">
                                <label for="m_Occupation">Mother's Occupation :</label>
                                <input type="text" id="m_Occupation" name="m_Occupation" placeholder="Enter Mother Occupation">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="no_Brother">No. Of Brothers :</label>
                                <input type="text" id="no_Brother" name="no_Brother" placeholder="Enter Number Of Brothers">
                            </div>
                            <div class="form-group">
                                <label for="no_Sister">No. Of Sisters :</label>
                                <input type="text" id="no_Sister" name="no_Sister" placeholder="Enter Number Of Sisters">
                            </div>
                        </div>

                        <fieldset>
                            <legend>
                                <h3>What You Is Looking For
                                </h3>
                            </legend>


                            <div class="form-row">
                                <div class="form-group">
                                    <label for="i_age">Age :</label>
                                    <input type="text" id="i_age" name="i_age" placeholder="Enter your age">
                                </div>
                                <div class="form-group">
                                    <label for="I_marital_status">Marital Status :</label>
                                    <input type="text" id="I_marital_status" name="I_marital_status" placeholder="Enter your Marital Status">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="I_complexion">Complexion :</label>
                                    <input type="text" id="I_complexion" name="I_complexion" placeholder="Enter Complexion">
                                </div>
                                <div class="form-group">
                                    <label for="I_height">Height :</label>
                                    <input type="text" id="I_height" name="I_height" placeholder="Enter height">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="religion">religion :</label>
                                    <select id="religion" onchange="change_country(this.value)" class="frm-field required" name="religion">
                                        <option selected="selected" value=''></option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Sikh">Sikh</option>
                                        <option value="Jain">Jain</option>
                                        <option value="Buddhist">Buddhist</option>
                                        <option value="No Religious Belief">No Religious Belief</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="i_caste">Caste :</label>
                                    <input type="text" name="i_caste" placeholder="Caste" required="" value=''>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="i_drink">Drink :</label>
                                    <input type="text" id="i_drink" name="i_drink" placeholder="Enter Complexion">
                                </div>
                                <div class="form-group">
                                    <label for="i_diet">Diet :</label>
                                    <input type="text" id="i_diet" name="i_diet" placeholder="Enter Diet">
                                </div>
                            </div>




                            <input type="submit" value="Create Profile" name="submit">
                    </form>

                </div>
            </div>
        </div>


        <?php
        include 'config.php';


        if (isset($_POST['submit'])) {

            /////////////////Phot Upload Code

            $target_dir = "uploads/"; // Specify the directory where the file will be uploaded
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size (limit to 5MB)
            if ($_FILES["fileToUpload"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            $allowedTypes = array("jpg", "png", "jpeg", "gif");
            if (!in_array($fileType, $allowedTypes)) {
                echo "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                // If everything is ok, try to upload the file
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            /********************************* Resume Upload Coad******************************************/

              $target_dir = "uploads/"; // Specify the directory where the file will be uploaded
              $target_file1 = $target_dir . basename($_FILES["biodata"]["name"]);
              $uploadOk = 1;
              $fileType = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));

              // Check if file already exists
              if (file_exists($target_file1)) {
                 echo "Sorry, file already exists.";
                 $uploadOk = 0;
              }

              // Check file size (limit to 5MB)
              if ($_FILES["biodata"]["size"] > 500000000) {
                 echo "Sorry, your file is too large.";
                 $uploadOk = 0;
              }

              // Allow certain file formats
              $allowedTypes = array("pdf", ".docx");
              if (!in_array($fileType, $allowedTypes)) {
                 echo "Sorry, only PDF,DOCX files are allowed.";
                 $uploadOk = 0;
              }

              // Check if $uploadOk is set to 0 by an error
              if ($uploadOk == 0) {
                 echo "Sorry, your file was not uploaded.";
              } else {
                 // If everything is ok, try to upload the file
                 if (move_uploaded_file($_FILES["biodata"]["tmp_name"], $target_file1)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["biodata"]["name"])) . " has been uploaded.";
                 } else {
                    echo "Sorry, there was an error uploading your file.";
                 }
              }



            $name = $_POST['Name'];
            $gender = $_POST['Gender'];
            $age = $_POST['age'];
            $height = $_POST['height'];
            $religion = $_POST['Religion'];
            $caste = $_POST['caste'];
            $Material_Status = $_POST['marital_status'];
            $profile_for = $_POST['profile_for'];
            $creator_name = $_POST['creator_name'];
            $Profession = $_POST['profession'];
            $country = $_POST['country'];
            $city=$_POST['city'];
            $mobileno=$_POST['mobile'];
            $Message = $_POST['message'];
            $Education = $_POST['education'];
            $Diet = $_POST['diet'];
            $Language = $_POST['motherTongue'];
            $BloodGroup = $_POST['bloodGroup'];
            $Complexion = $_POST['complexion'];
            $Weight = $_POST['weight'];
            $Father_Name = $_POST['father_name'];
            $Father_Occu = $_POST['F_Occupation'];
            $Mother_Name = $_POST['mother_name'];
            $Mother_Occu = $_POST['m_Occupation'];
            $No_Brother = $_POST['no_Brother'];
            $No_Sister = $_POST['no_Sister'];
            $I_Age = $_POST['i_age'];
            $I_MaritalStatus = $_POST['I_marital_status'];
            $I_Complexion = $_POST['I_complexion'];
            $I_Height = $_POST['I_height'];
            $I_religion = $_POST['religion'];
            $I_Caste = $_POST['i_caste'];
            $I_diet = $_POST['i_diet'];
            $sql = "INSERT INTO `profile`(`Name`, `Gender`, `Age`, `Height`, `Religion`, `caste`, `Marital_status`, `Profile_For`,`creator_name`, `Profession`, `Country`,`city`,`MobileNo`, `About`, `Photo`, `biodata`, `Education`, `Diet`, `Language`, `Blood_Group`, `Complexion`, `Weight`, `F_Name`, `F_Occu`, `M_Name`, `M_Occu`, `No_Brothers`, `No_Sisters`, `I_age`, `I_MaritalStatus`, `I_Complexion`, `I_Height`, `I_Religion`, `I_Caste`, `I_Diet`) VALUES ('$name','$gender','$age','".$conn -> real_escape_string($height)."','$religion','$caste','$Material_Status','$profile_for','$creator_name','$Profession','$country','$city','$mobileno','".$conn -> real_escape_string($Message)."','$target_file','$target_file1','$Education','$Diet','$Language','$BloodGroup','$Complexion','$Weight','$Father_Name','$Father_Occu','$Mother_Name','$Mother_Occu','$No_Brother','$No_Sister','$I_Age','$I_MaritalStatus','$I_Complexion','$I_Height','$I_religion','$I_Caste','$I_diet')";
            //echo  $sql;


            if ($conn->query($sql)) {

                echo "<script>
             alert('Your account has beed created successfully!'); 
               window.location='matches.php'; 
            </script>";
            } else {
                echo "<BR><BR> Error occured";
            }
            // echo "<script>alert('$Date_of_birth')</script>";
        }

        ?>



        <?php
        include 'footer.php';
        ?>
</body>

</html>