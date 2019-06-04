<?php 
	
	//error_reporting(0);
	if (isset($_POST['submit'])) {
		
		$name = trim($_POST['name']);
		$email = $_POST['email'];
		$msg = $_POST['message'];

		if (!$name || !$email ||!$msg) {
			echo "all fileds required";
			exit();
		}else{

			$to = "saribbinnasir@gmail.com"; // recipient email
			$subject = "$name sent u a message"; //subject
			//message
			$message = "Name: $name \r\n";
			$message .= "Email: $email \r\n";
			$message .= "Message: \r\n $msg";

			$message = wordwrap($message, 80);
			$headers = "MINE-Version: 1.0\r\n";
			$headers .="Content-type: text/plain; charset=iso=8859-1\r\n";
			$headers .="From: $name <$email> \r\n";
			$headers .="X-Priority: 1\r\n";
			$headers .="X-MSMail-Priority: High \r\n\r\n";

			//send the mail
			mail($to, $subject, $message, $headers);

		}
 ?>
<div class="container">
				<h5>thanks</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<p><a href="index.php">&laquo; go to home page</a></p>
			</div>
		<?php }else{?>

<div class="offset-sm-1 col-sm-3 contact-style">
	<form method="post" action="contact.php" id="contact">
		<h2 class="text-capitalize " style="padding-bottom:15px;">contact us<span class="color">.</span></h2>
		<form class="form-inline" >
			<div class="row ">
				<div class="col">
					<h6 class="text-capitalize">name<span class="color">:</span></h6>
					<input type="text" name="name" class="form-control form-control-sm" placeholder="Name" aria-describedby="name">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h6 for="email" class="text-capitalize" style="padding:8px 0 0 0;">email<span class="color">:</span></h6>
					<input type="email" name="email" class="form-control form-control-sm" placeholder="email" aria-describedby="email">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h6 for="message" class="text-capitalize" style="padding:8px 0 0 0;">message<span class="color">:</span></h6>
					<textarea type="text" name="message" class="form-control form-control-sm" placeholder="message" aria-describedby="message"></textarea>
				</div>
			</div>
			<div class="form-group">
		    <div style="padding-top:15px;">
		    	<button type="submit" name="submit"  class="btn btn-danger btn-sm" role="button"  id="submit">Send</button>
		      	<a class="btn btn-danger  btn-sm"  id="btn-4" href="index.php" role="button">&laquo; Previous Page</a>
		    </div>
	  	</div>
		</form>	
	</form>
</div>
<?php } ?>