<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
  <div class="header" style="background-color:black">
  	<h2>PIZZA STORE</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="email" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group" >
  		<button type="submit" style="background-color:black" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>