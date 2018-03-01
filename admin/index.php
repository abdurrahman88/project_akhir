<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="gambar/P1040806.jpg" type="image/ico" />
	<title>Form login</title>
	<link rel="stylesheet" type="text/css" href="css/login_2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="jquery/jquery-validation-1.17.0/demo/css/screen.css">
	<script src="jquery/jquery-validation-1.17.0/lib/jquery.js"></script>
	<script src="jquery/jquery-validation-1.17.0/dist/jquery.validate.js"></script>
	<script>
	$().ready(function() {
		$("#validation").validate({
			rules: {
				password: {
					required: true,
					minlength: 5
				},
				email: {
					required: true,
					email: true
				},
				agree: "required"
			},
			messages: {
				password: {
					required: "Masukan password anda terlebih dahulu..!!",
					minlength: "Your password must be at least 5 characters long"
				},
				email: "Masukan email anda terlebih dahulu",
			}
		});
	});
	</script>
</head>
<body background="gambar/mobil-3.jpg" style="background-size: cover; background-repeat: repeat-y;">
<center>
	<div class="container">
		<div class="wrapper clearfix">
			<h3 style="text-align: center;">Welcome Abdurrahman</h3>
			<form id="validation" action="proses/proses_login.php" method="post">
				<div class="icon clearfix">
					<i class="fa fa-user"></i>
					<br>
					<i class="fa fa-lock"></i>
				</div>
				<div class="input clearfix">
					<input type="text" class="email" name="email" placeholder="masukan email anda ..!!">
					<div style="clear: both;"></div>
					<input type="password" class="password" name="password" style="margin-bottom: 20px;" placeholder="****************">
					<div style="clear: both;"></div>
					<button style="padding: 10px 40px;font-size: 15px;font-family: lato;font-weight: bold;color: #D7D7D7;background-color: #2B3760;border-radius: 10px;border: none;width: 95%;">Sig-in</button>
				</div>
			</form>
		</div>
	</div>
</center>
</body>
</html>