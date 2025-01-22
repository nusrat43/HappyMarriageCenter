<head>
    <title> Search :: HappyMarriageCenter</title>


    <?php
    include 'admin_header.php';
    ?>

    <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 20px;
        } */

        .container {
            text-align: center;
        }

        .search-container {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input,
        select {
            padding: 5px;
            margin: 10px;
            width: 200px;
        }

        .search-btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .search-btn:hover {
            background-color: #45a049;
        }

        /* table {
            width: 100%;
            border: 1px solid red;
            border-collapse: collapse;
            margin-top: 20px;
        } */

        /* table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        } */
    </style>


</head>
<!-- breadcrumbs -->
<!-- <div class="w3l_agileits_breadcrumbs">
	<div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>&#187;</span></li>

				<li>Matches</li>
			</ul>


		</div>
	</div>
</div> -->

<div class="tittle-agileinfo">
    <h3>Search</h3>

</div>

<div class="container">
    <!-- <h2 style="color:red;">Search</h2> -->
    <form action="search.php" method="POST" class="search-container">
        <label>Religion: </label>
        <select name="Religion" id="Religion" onchange="updateCaste()">
            <option value="">Select Religion</option>
            <option value="Hindu">Hindu</option>
            <option value="Muslim">Muslim</option>
            <option value="Christian">Christian</option>
            <option value="Sikh">Sikh</option>
            <option value="Jain">Jain</option>
            <option value="Buddhist">Buddhist</option>
            <option value="No Religious Belief">No Religious Belief</option>
            <!-- Add more religions as needed -->
        </select>

        <label>Caste: </label>
        <select name="caste" id="caste">
            <option value="">Select Caste</option>
            <option value=""></option>
           
            <!-- Add more castes as needed -->
        </select>

        <label>City: </label>
        <select name="city">
            <option value="">Select City</option>
            <option value="Delhi">Delhi</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Patna">Patna</option>
            <option value="Mau">Mau</option>
            <option value="Aara">Aara</option>
            <!-- Add more cities as needed -->
        </select>

        <br>
        <input type="submit" value="Show" class="search-btn">
    </form>

    <div class="results">
        <!-- The result data will be displayed here after search -->
        <?php
        if (isset($_GET['results'])) {
            echo $_GET['results'];
        }
        ?>
    </div>
</div>


<script>
        // Arrays for each state's cities
        var HinduCaste = ["Brahmins", "Rajput", "Maratha", "Thakur", "Yadav","Jat","Kurmi","Teli"];
        var MuslimCaste = ["Syed", "Sheikh", "Pathan","Ansari","Qureshi","Siddiqui"];
        var ChristianCaste = ["Nasrani", "Knanaya", "Syro-Malabar","Syro-Malankara","Pallan","Pulaya","Cheruman"];
        var SikhCaste = ["Jatt", "Khatri", "Ramgarhia","Ahluwalia","Labana","Arora"];
        var JainCaste = ["Agarwal", "Khandelwal", "Oswal", "Porwal","Shrimal","Chaturth","Bagherwal"];
        var BuddhistCaste = ["Mahars","Chandals","Balmikis","Jatavas","Meghwals","Matang"]
        var NoReligiousBelief= []

        // Function to update the city dropdown based on selected state
        function updateCaste() {
            const ReligionSelect = document.getElementById("Religion");
            const casteSelect = document.getElementById("caste");
            const selectedReligion = ReligionSelect.value;

            // Clear previous city options
            casteSelect.innerHTML = '<option value="">Select Caste</option>';

            // Get the array of cities for the selected state
            let castes = [];
            if (selectedReligion === "Hindu") {
                castes = HinduCaste;
            } else if (selectedReligion === "Muslim") {
                castes = MuslimCaste;
            } else if (selectedReligion === "Christian") {
                castes = ChristianCaste;
            } else if (selectedReligion === "Sikh") {
                castes = SikhCaste;
            } else if (selectedReligion === "Jain") {
                castes = JainCaste;
            } else if (selectedReligion === "Buddhist") {
                castes =  BuddhistCaste;
            } 
            // else if (selectedReligion === "No Religious Belief") {
            //     castes =  NoReligiousBelief;
            // }

            // Populate the city dropdown with the cities
            castes.forEach(caste => {
                const option = document.createElement("option");
               
                option.value = caste;
               
                option.textContent = caste;
              
                casteSelect.appendChild(option);
            });
        }
    </script>



<?php

include 'config.php';
if (isset($_POST['Religion']) || isset($_POST['caste']) || isset($_POST['city'])) {
    $religion = $_POST['Religion'];
    $caste = $_POST['caste'];
    $city = $_POST['city'];

    // Base query: We start with Religion and Caste, City is added as optional
    $sql = "SELECT * FROM profile WHERE 1=1";

    // Religion must match
    if ($religion != "") {
        $sql .= " AND Religion='$religion'";
    }

    // Caste must match
    if ($caste != "") {
        $sql .= " AND caste='$caste'";
    }

    // City is optional and is included if provided
    if ($city != "") {
        $sql .= " AND city='$city'";
    }

    // Echo SQL for debugging
    // echo $sql;

    $result = $conn->query($sql);

    echo "<table class='table table-striped'>";
    echo "<tr><th>Name</th><th>Religion</th><th>Caste</th><th>City</th><th>Photo</th></tr>";

    if ($result->num_rows > 0) {
        // Output data for each row
        while ($row = $result->fetch_assoc()) {
            $Profile_Photo = $row['Photo']; // Fetch the photo from the current row
            echo "<tr>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Religion'] . "</td>";
            echo "<td>" . $row['caste'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td><img src='" . $Profile_Photo . "' height='100px' width='100px'></td>";
            echo "</tr>";
        }
    } else {
        // Display message when no matches are found
        echo "<tr><td colspan='5'>No matches found</td></tr>";
    }

    echo "</table>";
}

$conn->close();

?>






<?php
include 'footer.php';
?>