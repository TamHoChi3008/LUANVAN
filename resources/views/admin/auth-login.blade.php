<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CodePen - Sign up / Login Form</title>
	<link rel="stylesheet" href="../userlogin/assets/style.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<style>
	.login{
		transform: translateY(-500px);
	}
</style>
<body>
	<!-- partial:index.partial.html -->
	<!DOCTYPE html>
	<html>

	<head>
		<title>Slide Navbar</title>
		<link rel="stylesheet" type="text/css" href="slide navbar style.css">
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	</head>

	<body>
		<div class="main">
			<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<!-- <form  action="/register-user" method="POST">
				@csrf
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="user_name" placeholder="User name" required="">
					<input type="email" name="user_email" placeholder="Email" required="">
					<input type="password" name="user_password" placeholder="Password" required="">
					<button type="submit">Sign up</button>
				</form> -->
			</div>

			<div class="login">
				<form action="/login-admin" method="POST">
					@csrf
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="user_email" placeholder="Email" required="">
					<input type="password" name="user_password" placeholder="Password" required="">
					<button type="submit">Login</button>
				</form>
			</div>
		</div>
	</body>

	</html>
	<!-- partial -->

</body>
		<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
</html>