
<?php include 'header.php';?>


<div class="about_main clearfix">
	<section id="about">
	<img src="img/feedback.jpg" width="100%">
	</section>
	<section id="about_top">
	<div class="container">
	<div class="row">
	<div class="col-sm-12"></div>
	</div>
	</div>
	</section>
	<section id="about_bottom">
	<div class="container">
	<div class="row">
	<div class="col-sm-12"></div>
	</div>
	</div>
	</section>
</div>

<section id="contact_us">
		<div class="container">
		<div class="row">
		<div class="col-sm-12">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="port">CONTACT</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-0">
				<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
				<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
				<form method='POST'>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Name</label>
							<input type="text" name="t1" class="form-control" placeholder="Name" id="name" required="" data-validation-required-message="Please enter your name.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Email Address</label>
							<input type="email" name="t2" class="form-control" placeholder="abc@gmail.com" id="email" required="" data-validation-required-message="Please enter your email address.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Phone Number</label>
							<input type="tel" name="t3" class="form-control" placeholder="Phone Number" id="phone" required="" data-validation-required-message="Please enter your phone number.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
                    <div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Status</label>
							<input type="tel" name="t4" class="form-control" placeholder="Enter status" id="status" required="" data-validation-required-message="Please enter status.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Your Feedback</label>
							<textarea rows="5" name="t5" class="form-control" placeholder="Type your Message here" id="message" required="" data-validation-required-message="Please write your feedback here..."></textarea>
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-xs-12">
							<button type="submit" name="submit" class="btn btn-success btn-lg">Send</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-6 col-lg-offset-0">
			 <div class="contact_main">
			   <a href="#"><img src="img/contact1.png"></a>
			 </div>
			</div>
		</div>
		</div>
		</div>
		</div>
		</section>


<?php include 'footer.php';?>

<div id="toTop" class="btn btn-info" style="display: block;"><span class="glyphicon glyphicon-chevron-up"></span>  Top</div>
 
<script>
$(document).ready(function(){
  $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
	$(window).scroll(function () {
		if ($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	}); 
$('#toTop').click(function(){
	$("html, body").animate({ scrollTop: 0 }, 600);
	return false;
});
});

</script>

<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown(0);
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp(0);
            $(this).toggleClass('open');       
        }
    );
	
	/*****Fixed Menu******/
	var secondaryNav = $('.cd-secondary-nav'),
	   secondaryNavTopPosition = secondaryNav.offset().top;
		$(window).on('scroll', function(){
			if($(window).scrollTop() > secondaryNavTopPosition ) {
				secondaryNav.addClass('is-fixed');	
			} else {
				secondaryNav.removeClass('is-fixed');
			}
		});	
		
});
	</script>
	
</body>
       
</html>
<?php
if(isset($_POST['submit']))
{
    include'config.php';

    $name=$_POST['t1'];
    $email=$_POST['t2'];
    $phn=$_POST['t3'];
    $stat=$_POST['t4'];
    $fbck=$_POST['t5'];
   
    
    $sql="insert into feedback(Name,Email,Phone,Stat,Fdate,Feedback) values ('$name','$email','$phn','$stat',CURTIME(),'$fbck')";
    $con->query($sql);

     echo"hello $name,you are successfully submited feedback form.";
} 
?>