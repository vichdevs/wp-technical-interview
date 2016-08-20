<form action="" id="contact-form" method="">
	<div class="messages">
		<!-- Example success message -->
		<p class="message message-success">Thank you for your enquiry, we have received your message.</p>
	</div>
	<div>
		<label for="name">Name</label>
		<input type="text" id="name" name="name">
		<div class="messages">
			<!-- Example error message -->
			<p class="message message-error">Your name cannot be empty.</p>
			<p class="message message-error">Your name cannot contain numbers or symbols.</p>
		</div>
	</div>
	<div>
		<label for="email">Email address</label>
		<input type="email" id="email" name="email">
		<div class="messages">
			<!-- Example error message -->
			<p class="message message-error">Your email address cannot be empty.</p>
		</div>
	</div>
	<div>
		<label for="password">Password</label>
		<input type="password" id="password" name="password">
		<div class="messages"></div>
	</div>
	<div class="right-align">
		<button>Send enquiry <i class="fa fa-envelope-o"></i></button>
	</div>
</form>