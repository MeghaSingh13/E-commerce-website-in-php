<?php
// include '../controllers/usercontroller.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/vertical-layout-light/stylelog.css"> 
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="register" method="post" action="../controllers/usercontroller.php">
            
				<div class="login__field">
                <i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="name" class="login__input" placeholder="User name ">
				</div>
				<div class="login__field">
                <i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="phone" class="login__input" placeholder="Phone Number">
				</div>
				<div class="login__field">
                <i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="email" class="login__input" placeholder="Email">
				</div>
				<div class="login__field">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
					<input type="password" class="login__input" name="pwd" placeholder="Password">
				</div>
				<div class="login__field">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
					<input type="password" class="login__input" name="cpwd" placeholder="Confrom Password">
				</div>
				<!-- <a class="button login__submit" href="" name='save'>
					<span class="button__text">Register</span>
                </a>-->
                <button type="submit" name="save" value="register">register</button>
				<a href="login.php">Log In</a>	
			</form>
			
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