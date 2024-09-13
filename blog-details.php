<head>
    <title> About :: HappyMarriageCenter</title>

    <?php
    include 'header.php';
    ?>
      <style>
      p{
        font-size:large;
        color:gray;
      }
         h2,h4{
          font-size: x-large;
          color: rgba(0, 0, 0, 0.783);

         }
         .bold{
          color:rgba(0, 0, 0, 0.681);
         }
         .blog-main-container{
          width: 75%;
         }
         .row{
          display: flex;
          justify-content: center;
          align-items: center;
         }
         .blog-poster img{
            padding: 10px 0;
          width: 100%;
          height: 15rem;
          object-fit: cover;
          opacity: 0.7;
         }
         .blog-poster{
             position: relative;
             text-align: center;
             color: rgb(12, 46, 76);
         }
         .centered{
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
         }
         .centered{
          p{
            font-size: xx-large;
            font-weight: 500;
            color:black;
          }
         }
         .blog__thumbnail img {
          width:80%;
          height: 40vh;
         line-height: 1;
         object-fit: cover;
}
@media only screen and (max-width: 375px) {
            .blog-main-container{
          width: 90%;
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
<div class="blog-poster">
<img src="images/background-blog2.jpg" alt="food-img">
<div class="centered"> <p><b>Impressive Matrimonial Profile</b></p></div>
      </div>
      <!-- Start blog details section -->
      <section class="blog__details--section section--padding">
        <div class="container">
          <div class="row">
            <div class="blog-main-container">
              <div class="blog__details--wrapper">
                <div class="entry__blog">
                  <div class="blog__post--header mb-30">
                    <h1 >
                    Create Impressive Matrimonial Profile:
                    </h1>
                  </div>
                  <p class="blog__details--content__subtitle mb-25">
                    we have a well-stocked pantry, We are prepared for
                    unexpected emergencies, planned for a busy week, and ensure
                    you always have ingredients on hand.
                  </p>
                  <div class="blog__thumbnail >
                    <img
                      class="blog-thumbnail-img border-radius-10"
                      src="assets/img/blog/pulses.jpg"
                      alt="blog-img"
                    />
                  </div>
                  <div class="blog__details--content">
                   

                    <div>
                     <h2> These are the product we have in stock :-</h2><br>

                      <h4>Non-Perishable Staples :- </h4><br>
                      <ul >
                        <li>
                          <p>  <b class="bold"> Canned Goods:</b>Include vegetables, fruits,
                            beans, and soups. Canned tomatoes and tuna are
                            particularly versatile.</p>
                        </li>
                        <br>
                        <li>
                          <p><b class="bold"> Dry Grains:</b> Stock up on rice, pasta, quinoa,
                            and oats. These are foundational for many meals.</p>
                        </li>
                        <br>
                        <li>
                         <p> <b class="bold"> Legumes:</b> Dried beans, lentils, and chickpeas
                          are great sources of protein and fiber.</p>
                        </li>
                        <br>
                        <li>
                         <p> <b class="bold">Cooking Oils:</b> Olive oil, vegetable oil, and
                          coconut oil have various uses in cooking.</p>
                        </li>
                        <br>
                        <li>
                          <p><b class="bold"> Baking Essentials:</b> Flour, sugar, baking
                            powder, baking soda, and yeast are necessary for
                            baking and cooking.</p>
                        </li>
                        <br><br>
                      </ul>
                      
                      <h4>Snacks and Convenience Foods :-</h4><br>
                      <ul >
                        <li>
                          
                          <p><b class="bold"> Packaged Snacks:</b> Chips and Crackers: Include a variety of flavors and brands.</p>
                        </li>
                        <br>
                        <li>
                          <p>                          <b class="bold">Cookies and Candy: </b>  Offer both popular brands and healthier options
                          </p>
                        </li>
                        <br>
                        <li>
                          <p><b class="bold"> Canned and Jarred Foods:</b>Items like pasta sauces, peanut butter, and pickles.</p>
                        </li>
                        <br>
                        <li>
                          <p><b class="bold">Instant Foods: </b> Instant noodles, oatmeal, and ready-to-eat soups.</p>
                        </li>
                        <br>
                        
                      </ul>
                      <h4>Spices and Seasonings:- </h4><br>
                      <ul >
                        <li>
                          <p><b class="bold"> Salt and Pepper:</b> The basics of any seasoning section.</p>
                        </li><br>
                        <li>
                          <p><b class="bold">Popular Spices:  </b> Garlic powder, paprika, cumin, and dried herbs like basil and oregano.</p>
                        </li><br>
                        <li>
                          <p><b class="bold"> Specialty Seasonings:</b>Consider international spices to cater to diverse culinary preferences.</p>
                        </li><br>
                        <li>
                          <p><b class="bold">Instant Foods: </b> Instant noodles, oatmeal, and ready-to-eat soups.</p>
                        </li><br>
                        
                      </ul>
                    </div>
                    <blockquote
                      class="blockquote__content bg__gray--color mb-30"
                    >
                      <h2>
                       <i> &#10075;&#10075; Thank You for Visiting Our Blog !
                        Remind them to check back regularly for updates and new posts.&#10076;&#10076;</i>
                      </h2>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
include 'footer.php';
?>