<?php

session_start();
require('keyboard_connection.php');



?>


<html>
<head>
	<title>Keyboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<style type="text/css">
	p, .button, h1, h3 {
		font-family:Copperplate Gothic Light;
	}
	h1 {
		text-align: center;
		font-weight: bold;
	}
	.button {
		background:linear-gradient(silver,lightgrey,silver);
		border:solid grey 1px;
		border-radius: 4px;
	}
	form {
		width:200px;
	}
	form * {
		display: block;
	}
	ul {
		list-style-type: none;
		padding:0px;
	}
	li {
		text-align: center;
		color:red;
	}
	video#bgvid {
			position: fixed; right: 0; bottom: 0;
			min-width: 100%; min-height: 100%;
			width: auto; height: auto; z-index: -100;
			background-size: cover;
	}
	</style>
</head>
<body>
	<div class="container col-md-12 col-md-pull-5 col-xs-12 col-xs-pull-4">
		<h1>Loop</h1>
	</div>
	<div class="container col-md-12 col-xs-12">
		<?php
		if (isset($_SESSION['errors'])) {
			echo "<ul>";
			foreach ($_SESSION['errors'] as $error) {
				echo "<li style='font-weight:bold;font-family:Copperplate Gothic Light'>$error</li>";
			}
			echo "</ul>";
			unset($_SESSION['errors']);
		}
		?>
	</div>
	<div class="container col-xs-4 col-xs-push-3">
		<form action="keyboard_process.php" method="post">
			<h3>Login</h3>
			<p>Email: </p>
			<input type="text" name="email">
			<p>Password: </p>
			<input type="password" name="password">
			<br>
			<input class="button" type="submit" value="Login">
			<input type="hidden" name="action" value="login">
		</form>
	</div>
	<div class="container col-xs-4 col-xs-push-3">
		<form action="keyboard_process.php" method="post">
			<h3>Register</h3>
			<p>First Name: </p>
			<input type="text" name="first_name">
			<p>Last Name: </p>
			<input type="text" name="last_name">
			<p>Email: </p>
			<input type="text" name="email">
			<p>Password: </p>
			<input type="password" name="password">
			<p>Confirm Password: </p>
			<input type="password" name="confirm_password">
			<br>
			<input class="button" type="submit" value="Register">
			<input type="hidden" name="action" value="register">
		</form>
	</div>
	<video autoplay loop poster="background.png" id="bgvid">
		<source src="http://andershede.com/wp-content/uploads/2014/08/NorthSide.webm" type="video/webm">
	</video>
</body>
</html>