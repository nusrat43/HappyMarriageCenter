<head>
    <title> About :: HappyMarriageCenter</title>

    <?php
    include 'header.php';
    ?>
    <style>
        .container {
            padding-left: 0;
            padding-right: 0;
        }

        body {
            background-image: url(images/background-blog.jpg);
            background-size: cover;

        }

        .card-img-top {
            height: 30vh;
            object-fit: cover;
            width: 100%;
            border-radius: 5px;
        }

        .card-img-top:hover {
            transform: scale(1.02);
        }

        .blog-card {
            width: 340px;
            background-color: white;
            margin-right: 10px;
            margin-left: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 3px;
        }

        .blog-card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
            transition: 0.3s;
        }

        .main-blog-card {
            margin-top: 10px;
        }

        .card-container {
            padding-top: 40px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;

        }

        #anc {
            color: black;
            text-decoration: none;
        }

        #anc:hover {
            color: rgb(50, 121, 188);
            transition: 0s;
        }

        .card-body {
            height: 100px;
            padding: 10px;
        }

        .blog-main {
            height: 15rem;
            width: 100%;
            margin-bottom: 30px;

        }

        .blog-main-img {
            object-fit: cover;
            height: 15rem;
            width: 100%;
            opacity: 0.8;
        }

        .card-heading-container {
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
            height: 25px;
        }

        .card-date p a {
            text-decoration: none;
            color: black;
            opacity: 0.5;
        }

        .card-date p a:hover {
            opacity: 1;
            color: crimson;
            transition: 0.2s;
        }

        .card-heading b a {
            text-decoration: none;
            color: crimson;
        }

        .card-text {
            text-align: justify;
        }

        @media screen and (max-width: 700px) {
            body {
                background-image: url(images/background-blog-copy.jpg);
                background-size: cover;
            }
        }

        @media screen and (max-width: 350px) {
            .blog-card {
                width: 280px;

            }
        }
    </style>
</head>
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
    <div class="container">
        <div class="w3l_agileits_breadcrumbs_inner">
            <ul>
                <li><a href="index.php">Home</a><span>&#187;</span></li>

                <li>Blog</li>
            </ul>
        </div>
    </div>
</div>
<!-- //breadcrumbs -->
<div class="login elite-app">
    <div class="container">
        <div class="tittle-agileinfo">
            <h3>Blog</h3>
        </div>
        <div div class="row card-container">
            <div class="col-lg-4 col-sm-6 mb-4 blog-card">
                <a href="blog-details.php"><img src="images/blog-profile.jpg" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                    <div class="card-heading-container">
                        <div class="card-heading"><b><a href="blog-details.php">Impressive Matrimonial Profile</a></b></div>
                        <div class="card-date">
                            <p><a href="blog-details.php">8 Sept, 2024</a></p>
                        </div>
                    </div>
                    <h5 class="card-text">

                        Creating an impressive matrimonial profile is about more than just listing your details...
                    </h5>
                    <a id="anc" href="blog-details.php"><b>Read More...</b> </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 blog-card">
                <a href="blog-details2.php"><img src="images/blog-profile2.jpg" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                    <div class="card-heading-container">
                        <div class="card-heading"><b><a href="blog-details2.php">Happy life after marriage</a></b></div>
                        <div class="card-date">
                            <p><a href="blog-details2.php">13 Sept, 2024</a></p>
                        </div>
                    </div>
                    <h5 class="card-text">

                        Tips for happy life after marriage...

                    </h5>
                    <a id="anc" href="blog-details2.php"><b>Read More...</b> </a>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 blog-card">
                <a href="blog-details3.php"> <img src="images/blog-profile3.jpg" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                    <div class="card-heading-container">
                        <div class="card-heading"><b><a href="blog-details3.php">The Man of Her Dreams</a></b></div>
                        <div class="card-date">
                            <p><a href="blog-details3.php">15 Aug, 2024</a></p>
                        </div>
                    </div>
                    <h5 class="card-text">

                        The man of her dreams is not just a handsome face or a charming smile...

                    </h5>
                    <a id="anc" href="blog-details3.php"><b>Read More...</b> </a>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 blog-card">
                <a href="blog4.html"><img src="images/blog-profile4.jpg" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                    <div class="card-heading-container">
                        <div class="card-heading"><b><a href="blog4.html">Long-Distance Relationship</a></b></div>
                        <div class="card-date">
                            <p><a href="blog4.html">17 Aug, 2024</a></p>
                        </div>
                    </div>
                    <h5 class="card-text">
                        How to Make a Long-Distance Relationship Interesting: 8 Ways to Express Love...

                    </h5>
                    <a id="anc" href="blog1.php"><b>Read More...</b> </a>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 blog-card">
                <a href="blog5.html"><img src="images/blog-profile5.jpg" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                    <div class="card-heading-container">
                        <div class="card-heading"><b><a href="blog5.html">Find your perfect match with us</a></b></div>
                        <div class="card-date">
                            <p><a href="blog5.html">30 Aug, 2024</a></p>
                        </div>
                    </div>
                    <h5 class="card-text">

                        We can help you to find your perfect match...

                    </h5>
                    <a id="anc" href="blog1.php"><b>Read More...</b> </a>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 blog-card">
                <a href="blog6.html"><img src="images/blog-profile6.jpg" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                    <div class="card-heading-container">
                        <div class="card-heading"><b><a href="blog6.html">Wife & Husband Role</a></b></div>
                        <div class="card-date">
                            <p><a href="blog6.html">2 Sept, 2024</a>
                        </div>
                    </div>
                    <h5 class="card-text">

                        Role of wife and husband in modern family...

                    </h5>
                    <a id="anc" href="blog1.php"><b>Read More...</b> </a>
                </div>  
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>