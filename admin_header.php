<?php

session_start();
// Function to check if the user is an admin
function checkAdminAccess()
{
    if (!isset($_SESSION['Type']) || $_SESSION['Type'] !== 'Admin') {
        header('Location:unauthorized.php'); // Redirect to unauthorized page
        exit();
    }
}

checkAdminAccess(); // Check access before displaying the page
?>

<head>
    <title> About :: HappyMarriageCenter</title>

    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Elite Match Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //for-mobile-apps -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap -->
        <link href="css/font-awesome.css" rel="stylesheet"> <!-- Font awesome -->
        <link href="css/owl.carousel.css" rel="stylesheet"><!-- Clients -->
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /><!-- Pop-up -->
        <link href="css/lsb.css" rel="stylesheet" type="text/css"><!-- gallery -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
        <!--//fonts-->


        </script>
        <style>
            /* The side navigation menu */
            .sidebar {
                margin: 0;
                padding: 0;
                width: 250px;
                background-color: #f1f1f1;
                position: fixed;
                height: 100%;
                overflow: auto;
            }

            /* Sidebar links */
            .sidebar a {
                display: block;
                color: black;
                padding: 16px;
                text-decoration: none;
            }

            /* Active/current link */
            .sidebar a.active {
                background-color: #EA3621;
                color: white;
            }

            /* Links on mouse-over */
            .sidebar a:hover:not(.active) {
                background-color: #555;
                color: white;
            }

            /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
            div.content {
                margin-left: 250px;
                height: fit-content;
            }

            .toggle-btn {
                display: none;
            }

            hr {
                height: 10px;
                background-color: red;
            }

            .searchbar {
                position: relative;
                overflow: hidden;
                backdrop-filter: blur(2px);
            }

            .searchbar-icon {
                position: absolute;
                right: 27px;
                top: 18px;
                background-color: transparent;
                color: black;
                cursor: pointer;
            }

            input[type=text] {
                padding: 9px;
                border: none;
                font-size: 18px;
                background-color: whitesmoke;
                text-align: left;
                text-indent: 8px;
                outline: none;
            }

            h1.logo img {
                height: 160px;
                width: 200px;
                float: left;
                padding-top: 0;
                margin-right: 600px;
            }

            .searchbar,
            input[type=text] {
                border-radius: 30px;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.2);

            }

            /* On screens that are less than 700px wide, make the sidebar into a topbar */

            @media screen and (max-width: 1200px) {
                .sidebar {
                    margin: 0;
                    padding: 0;
                    width: 250px;
                    background-color: #f1f1f1;
                    position: fixed;
                    height: 100%;
                    overflow: auto;
                }

                /* Sidebar links */
                .sidebar a {
                    display: block;
                    color: black;
                    padding: 16px;
                    text-decoration: none;
                }

                /* Active/current link */
                .sidebar a.active {
                    background-color: #EA3621;
                    color: white;
                }

                /* Links on mouse-over */
                .sidebar a:hover:not(.active) {
                    background-color: #555;
                    color: white;
                }

                /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
                div.content {
                    margin-left: 250px;
                    height: fit-content;
                }

                .toggle-btn {
                    display: none;
                }

                .container .search-container{
                    /* display: flex; */
                    flex-wrap: nowrap;
                }
            }

            @media screen and (min-width: 700px) {
                .header-inner {
                    display: flex;
                    justify-content: space-evenly;
                    align-items: center;
                }

            }

            @media screen and (max-width: 1200px) {

                /* styles.css */
                div.content {
                    margin-left: 0px;
                    height: fit-content;
                }

                .toggle-btn {
                    display: inline-block;
                    font-size: 18px;
                    cursor: pointer;
                    position: absolute;
                    top: 2px;
                    left: 2px;
                    z-index: 1000;
                }

                .sidebar {
                    height: fit-content;
                    width: 250px;
                    position: absolute;
                    top: 0;
                    left: 0;
                    background-color: white;
                    overflow-x: hidden;
                    transition: 0.3s;
                    z-index: 100;
                    transform: translateX(-100%);
                }

                .sidebar a {
                    padding: 15px;
                    text-decoration: none;
                    font-size: 18px;
                    color: black;
                    display: block;
                    transition: 0.3s;
                    text-align: center;
                    float: none;
                }

                .sidebar a:hover {
                    color: #f1f1f1;
                }


                /* Show sidebar */
                .sidebar.show {
                    transform: translateX(0);
                }

            }

            li {
                list-style-type: none;
            }
        </style>
    </head>

<body><!-- The sidebar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toggleButton = document.querySelector('.toggle-btn');
            var sidebar = document.querySelector('.sidebar');

            toggleButton.addEventListener('click', function() {
                sidebar.classList.toggle('show');
            });
        });
    </script>
    <button class="toggle-btn">☰</button>
    <div class="sidebar">
        <a class="active" href="#home">
            <span><img height="25px" width="25px" src="images/gauge-high-solid (1).svg" alt=""></span> Admin Dashboard</a>
        <a href="ViewAllUser.php">View All User</a>
        <a href="enable.php">Enable/Disable User </a>
        <a href="adminEditPassword.php">Change Password</a>
        <a href="matches.php">Matches</a>
        <a href="Search.php">Search</a>
        <a href="editUserType.php">Change User Type</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="content">
        <div class="banner-w3ls inner-banner-agileits" id="home">
            <div class="container">
                <div class="header-inner">
                    <div>
                        <h1 class="logo">
                            <a href="index.php"><img src="images/LOGO.png"></a>
                        </h1>
                    </div>
                    <!-- <div class="topnav">
                        <div class="searchbar">
                            <input type="text" name="search" placeholder="Search...">
                            <span class="searchbar-icon"><i class="fas fa-search"></i></span>
                        </div>
                    </div> -->
                    <div class="header-right-w3ls">
                        <?php
                        if (isset($_SESSION['Email'])) {
                            include 'config.php';
                            $Email = $_SESSION['Email'];
                            $sql = "select Profile_Pic from register where Email= '$Email'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            $fliename = $row['Profile_Pic'];
                            echo "<li class='dropdown menu__item'>
								<a href='#' id='profile' class='dropdown-toggle menu__link' data-toggle='dropdown' data-hover='Pages'><img style='border-radius:50%;height:60px; width:60px;' src='$fliename'> </a>
								<ul class='dropdown-menu'>
									<li><a href='logout.php'>Log Out</a></li>
								</ul>
							</li>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <H1 align="center" style="margin-top: 20px; margin-bottom :20px;">Admin Dashboard</H1>

        <hr>