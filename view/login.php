<?php
// include 'database.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/vertical-layout-light/stylelog.css"> 
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login"  method="post" action="../controllers/usercontroller.php">
				<div class="login__field">
                <i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="email" class="login__input" placeholder="Email">
				</div>
				<div class="login__field">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
					<input type="password" name="pwd" class="login__input" placeholder="Password">
				</div>
                <a href="">Forget Password</a>
				<!-- <a class="button login__submit" href="">
					<span class="button__text">Log In</span></a>				 -->
                <button type="submit" name="submit" value="register" class="btn" >Login</button>
				<a href="register.php">Register</a>				
			</form>
			<div class="social-login">
				
				<div class="social-icons">
                <a><i class="fa fa-facebook-square falogin" aria-hidden="true" ></i></a>
				<a><i class="fa fa-instagram falogin" aria-hidden="true"></i></a>
                <a><i class="fa fa-twitter-square falogin" aria-hidden="true"></i></a>

				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>
</html>