<!DOCTYPE html>
<html>
<head>
	<title>Jibe | The Newest Dating App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<?php

	if(isset($_POST['email'])){
		$email = $_POST['email'];
		$get_data = callAPI('GET', 'https://manage.jibe.life/api/v1/user/subscribe?email='.base64_encode($email), false);
		$response = json_decode($get_data, true);
		$success = $response['success'];
		$msg = $response['msg'];
		unset($_POST['email']);
	}

	function callAPI($method, $url, $data){
	   $curl = curl_init();
	   switch ($method){
	      case "POST":
	         curl_setopt($curl, CURLOPT_POST, 1);
	         if ($data)
	            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	         break;
	      case "PUT":
	         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
	         if ($data)
	            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
	         break;
	      default:
	         if ($data)
	            $url = sprintf("%s?%s", $url, http_build_query($data));
	   }
	   // OPTIONS:
	   curl_setopt($curl, CURLOPT_URL, $url);
	   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	      'Content-Type: application/json',
	   ));
	   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	   // EXECUTE:
	   $result = curl_exec($curl);
	   if(!$result){die("Connection Failure");}
	   curl_close($curl);
	   return $result;
	}
?>
<style type="text/css">
	.modal-header{
		border-bottom: none !important;
	}
	.modal-footer{
		border-top:none !important;
	}
	.modal-content{
		background-color: #e30014
	}
</style>
<body>

	<a href="#"><img src="logo.png" class="logo" /></a>
	<a href="https://www.facebook.com/jibewithme/" target="_blank"><img src="facebook.png" class="facebook" /></a>
	<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
		<div class="container">
			<h3 class="headline text-center mb-4 pb-4"><span style="margin-left: 50px">Ready to</span> <span class="red">Jibe</span> <span style="margin-right:20px">with us?</span></h3>
			<h1 class="text-center mb-4 pb-4">We are preparing something amazing and exciting for you.<br>
				Special surprise for our subscribers only.</h1>
			<p class="text-center mb-4 pb-4">Subscribe to our newsletter and we will send you a notification about the launch of our brand new social platform.</p>
			<form method="post" class="text-center mt-4">
				<input class="email text-center" type="email" placeholder="Enter Your email address" name="email" required />
				<button class="btn btn-danger btn-send">Send</button>
			</form>
		</div>
	</div>

	<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true" class="text-white">&times;</span>
        			</button>
	      		</div>
		      	<div class="modal-body">
		      		<h2 class="text-center" style="font-size: 3rem">DONE!</h2>
		      		<p class="text-center">
		      			<?php if(isset($success) && $success):?>
		      			Thanks for subscribing.<br>
						We will send you a notification about<br>
						the launch of our brand brand new social platform.
						<?php elseif(isset($success) &&!$success):?>
						<?= $msg ?>
						<?php endif;?>
		      		</p>
		      	</div>
	    		<div class="modal-footer"></div>
	    	</div>

	  	</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		<?php if(isset($success)):?>
			$("#alertModal").modal("show");
		<?php endif;?>
	})
</script>
</html>