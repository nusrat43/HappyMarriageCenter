<!-- footer -->
<div class="w3l_footer">
	<div class="container">
		<div class="w3ls_footer_grid">
			<div class="col-md-4 w3ls_footer_grid_left">
				<h4>Location:</h4>
				<p>3rd floor, Pratimalya Shoppee, Shantikunj, Patna-(803115), Bihar, India</p>
			</div>
			<div class="col-md-4 w3ls_footer_grid_left">
				<h4>Contact us:</h4>
				<p><span>Phone : </span>9939802016</p>
				<p><span>Email : </span><a href="mailto:info@example.com">info@example.com</a></p>
			</div>
			<div class="col-md-4 w3ls_footer_grid_left">
				<h4>Opening hours:</h4>
				<p>Working days (10am-6pm)</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- footer-button-info -->
		<div class="footer-middle-agileinfo">
			<div class="footer-button">
				<div class="button-top-w3layouts">
					<div class="logo-icons-w3ls">
						<i class="fa fa-heart heart1" aria-hidden="true"></i>
						<i class="fa fa-heart-o heart2" aria-hidden="true"></i>
					</div>
				</div>

				<?php
				include "config.php";
				$sql = "UPDATE `visitors` SET `visit`=visit+1";
				$conn->query($sql);

				?>
				<div class="sim-button button12"><b style="font-size: larger;">Total visitors :  <b/>
					<?php
					$sql = "select visit from visitors";
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();

					$cnt = $row['visit'];
					echo $cnt;
					?>
				</div>
				<h2>We’re Committed to Service Excellence.</h2>
			</div>
		</div>
		<!-- footer-button-info -->
	</div>
</div>
<div class="footer-w3layouts">
	<div class="container">
		<div class="agile-copy">
			<p>© <script>
					var today = new Date(); // Date objects are created with the new Date() constructor
					var year = today.getFullYear();
					document.write("Copyright " + year);
				</script>
				Happy Marriage Center. All rights reserved | Design by <a href="http://w3layouts.com/">SSS</a></p>
		</div>
		<div class="agileits-social">
			<ul>
				<li><a href="https://www.facebook.com/happymarriagecenterindia"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://www.instagram.com/happy.marriagecenter?igsh=MXA5eGx3NnE5MHJoYg=="><i class="fa fa-instagram"></i></a></li>
				<li><a href="https://www.linkedin.com/in/happy-marriage-center/"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="https://x.com/HappyMarriageC2"><i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<!--/footer -->














<!-- js -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- script for responsive tabs -->
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function() {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			closed: 'accordion', // Start closed if in accordion view
			activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>
<!-- script for responsive tabs -->
<!-- flexisel -->
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo1").flexisel({
			visibleItems: 4,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 2
				}
			}
		});

	});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- gallery-pop-up -->
<script src="js/lsb.min.js"></script>
<script>
	$(window).load(function() {
		$.fn.lightspeedBox();
	});
</script>
<!-- //gallery-pop-up -->
<script src="js/SmoothScroll.min.js"></script>
<!--responsive slider -->
<script src="js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function() {
		// Slideshow 3
		$("#slider3").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function() {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function() {
				$('.events').append("<li>after event fired.</li>");
			}
		});

	});
</script>
<!--//responsive slider -->
<!--pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

	});
</script>
<!-- //pop-up-box -->

<!-- smooth scrolling -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/
		$().UItoTop({
			easingType: 'easeOutQuart'
		});
	});
</script>


<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for-Clients -->
<script src="js/owl.carousel.js"></script>
<!-- requried-jsfiles-for owl -->
<script>
	$(document).ready(function() {
		$("#owl-demo2").owlCarousel({
			items: 1,
			lazyLoad: false,
			autoPlay: true,
			navigation: false,
			navigationText: false,
			pagination: true,
		});
	});
</script>
<!-- //requried-jsfiles-for owl -->
<!-- //for-Clients -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>