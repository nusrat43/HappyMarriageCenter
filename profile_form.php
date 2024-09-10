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
            margin-bottom: 20px;
        }

        .form-group {
            width: 48%;
            /* Adjust width for two inputs side by side */
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            /* border-radius: 4px; */
            box-sizing: border-box;
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
                    <form method="post">
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
                                <label for="profession">Gender :</label>
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
                                <label for="country">Caste :</label>
                                <input type="text" name="country" placeholder="country" required="" value=''>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="marital_status">Marital Status :</label>
                                <input type="text" id="marital_status" name="marital_status" placeholder="Enter your Marital Status">
                            </div>
                            <div class="form-group">
                                <label for="height">Profile Created By :</label>
                                <select id="w3_country" onchange="change_country(this.value)" class="frm-field required" name="Profile_for">
                                    <option selected="selected"></option>
                                    <option value="Myself">Myself</option>
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="Relative">Relative</option>
                                    <option value="Friend">Friend</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="Marital_status">Profession : </label>
                                <input type="text" id="age" name="age" placeholder="Enter your Marital Status">
                            </div>
                            <div class="form-group">
                                <label for="country">Country :</label>
                                <input type="text" name="country" placeholder="country" required="" value=''>
                            </div>
                        </div>

                        <div class="form-row">
                        <div class="form-group">
                            <label for="Marital_status">About Your Self : </label>
                            <textarea name="Message" placeholder="Message" required=""></textarea>
                        </div>
                            <div class="form-group">
                                <label for="photo">Your Photo :</label>
                                <input type="file" name="Photo"  required="" value=''>
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
                                <label for="profession">Profession :</label>
                                <input type="text" id="profession" name="profession" placeholder="Enter profession">
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

                        <div class="form-group">
                            <label for="diet">Diet :</label>
                            <input type="text" id="diet" name="diet" placeholder="Enter Diet">
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
                                <label for="">No. Of Sisters :</label>
                                <input type="text" id="weight" name="weight" placeholder="Enter Number Of Sisters">
                            </div>
                        </div>

                        <fieldset>
                            <legend>
                                <h3>What She Is Looking For
                                </h3>
                            </legend>
                        </fieldset>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="age">Age :</label>
                                <input type="text" id="age" name="age" placeholder="Enter your age">
                            </div>
                            <div class="form-group">
                                <label for="marital_status">Marital Status :</label>
                                <input type="text" id="marital_status" name="marital_status" placeholder="Enter your Marital Status">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="complexion">Complexion :</label>
                                <input type="text" id="complexion" name="complexion" placeholder="Enter Complexion">
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
                                <label for="country">Caste :</label>
                                <input type="text" name="country" placeholder="country" required="" value=''>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="drink">Drink :</label>
                                <input type="text" id="drink" name="drink" placeholder="Enter Complexion">
                            </div>
                            <div class="form-group">
                                <label for="diet">Diet :</label>
                                <input type="text" id="diet" name="diet" placeholder="Enter Diet">
                            </div>
                        </div>





                        <input type="submit" value="Edit" name="submit">
                    </form>

                </div>
            </div>
        </div>


        <?php
        include 'footer.php';
        ?>
</body>

</html>