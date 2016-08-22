<?php
/**
 * Template Name: Contact Form Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<!-- Contact form -->

<form name="contact-form" class="wpcf7-form" method="post" >
<input type="hidden" name="contact-form-action" id="contact-form-action">
<div class="messages">
		<!-- Example success message -->
		<p class="message message-success" id="success-message" style="display:none;">Thank you for your enquiry, we have received your message.</p>

		<p class="message message-success" id="Failure-message" style="display:none;">Your request for enquiry will not successfully submit.Please fill up necessary data correctly & again. </p>
	</div>
	<div class="form-feild">
		<label for="name">Name</label>
        <input type="text" name="name" id="name">
		<div class="messages">
			<!-- Example error message -->
			<p class="message message-error" id="nameErrorMsg"></p>
			<p class="message message-error second" id="nameSecondErrorMsg"></p>
			<p class="message message-error">Your name cannot be empty.</p>
			<!--<p class="message message-error">Your name cannot contain numbers or symbols.</p>-->
		</div>
	</div>
	<div class="form-feild">
		<label for="email">Email address</label>
		<input type="text" name="email" id="email">
		<div class="messages">
			<!-- Example error message -->
			<p class="message message-error" id="emailErrorMsg"></p>
			<p class="message message-error second" id="emailValidErrorMsg"></p>
			<p class="message message-error">Your email address cannot be empty.</p>
		</div>
	</div>
	<div class="form-feild">
		<label for="password">Password</label>
	<input type="password" name="password" id="password">
		<div class="messages"></div>
	</div>

	<input type="button" class="wpcf7-form-control wpcf7-submit" value="SEND ENQUIRY" onclick="contactformsubmit();" >
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>

	function contactformsubmit(){
		var valid = 0;
		var name = document.forms["contact-form"]["name"].value;
		var email = document.forms["contact-form"]["email"].value;
		var password = document.forms["contact-form"]["password"].value;
		var symbol = /[!"·$%&/()=?¿@#¬]/; //cannot have symbol this inside name
		var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (name == "" && email == "") {
			document.getElementById("nameErrorMsg").innerHTML = "Name cannot be empty.";
			document.getElementById("emailErrorMsg").innerHTML = "Your email cannot be empty";
			valid = 0;
		}
		else if(name == null || name == ""){
			document.getElementById("nameErrorMsg").innerHTML = "Name cannot be empty.";
			document.getElementById("nameErrorMsg").style.visibility = "visible";
			document.getElementById("emailErrorMsg").style.visibility = "hidden";
			document.getElementById("nameSecondErrorMsg").style.visibility = "hidden";
			document.getElementById("emailValidErrorMsg").style.visibility = "hidden";
			valid = 0;
		}
		else if(/\d/.test(name) || symbol.test(name) ){
			document.getElementById("nameErrorMsg").style.visibility = "hidden";
			document.getElementById("nameSecondErrorMsg").innerHTML = "Your name cannot contain numbers  or symbols";
			valid = 0;
		}
		else if(email == null || email == ""){
			document.getElementById("emailErrorMsg").innerHTML = "Your email cannot be empty";
			document.getElementById("emailErrorMsg").style.visibility = "visible";
			document.getElementById("emailValidErrorMsg").style.visibility = "hidden";
			document.getElementById("nameErrorMsg").style.visibility = "hidden";
			document.getElementById("nameSecondErrorMsg").style.visibility = "hidden";
			valid = 0;
		}
		else if(!emailfilter.test(email)){
			document.getElementById("emailValidErrorMsg").innerHTML = "Please provide a valid email address ";
			document.getElementById("emailValidErrorMsg").style.visibility = "visible";
			document.getElementById("emailErrorMsg").style.visibility = "hidden";
			document.getElementById("nameErrorMsg").style.visibility = "hidden";
			document.getElementById("nameSecondErrorMsg").style.visibility = "hidden";
			valid = 0;
		}
		else{
			document.getElementById("nameErrorMsg").style.visibility = "hidden";
			document.getElementById("nameSecondErrorMsg").style.visibility = "hidden";
			document.getElementById("emailErrorMsg").style.visibility = "hidden";
			document.getElementById("emailValidErrorMsg").style.visibility = "hidden";
			valid = 1;
		}

		if(valid == 0){
			return false;
		}
		else{
			var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
			$(document).ready(function () {
				$.ajax({
					type: 'POST',
					dataType:'json',
					data: {action:'contact-form-action',name: name,email: email,password: password },
					url: ajaxurl,
					success: function(response) {
						if(response == 0){
							$("#success-message").show();
						}else{
							$("#Failure-message").show();
						}
					}
				});
			});	
		}
	}
</script>