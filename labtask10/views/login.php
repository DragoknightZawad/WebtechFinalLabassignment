<?php include 'login_header.php';
      require_once"../controllers/admin.php";
?>

<script src="js/login.js"></script>

<!--login starts -->
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<form name="myForm" action="" onsubmit="return validateForm()"  method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" class="form-control"><span><p id="username_error"></p></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password"name="password" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-danger" name="login" value="Login" class="form-control"><br><span><p id="password_error"></p></span>
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" >Not registered yet? Sign Up</a>
		</div>
</div>

<!--login ends -->
