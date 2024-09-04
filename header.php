<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green pearl</title>
    <link rel="stylesheet" href="Styles.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
	<header>
		<input type="checkbox" name="" id="toggler">
		<label for="toggler" class="menubar"><span class="material-symbols-outlined">menu</span></label>
		<a href="#"> <img src="photos/logo2.jpeg" placeholder="logo"></a>
		<nav class="navbar">
			<a href="index.php" class="Home">Home</a>
			<a href="index.php#about" class="About">About</a>
			<a href="index.php#products" class="Prodcut">Prodcut</a>
			<a href="index.php#review" class="review">review</a>
			<a href="index.php#contact" class="Contact">Contact</a>
		</nav>
		<div class="icons">
				<?php 
					if(isset($_SESSION["id"])){
						echo "<a href='profile.php'>profile</a>";
						echo "<a href='includes/logout.inc.php'>logout</a>";
						echo " <a href='#' class='cart_Icpn'><span class='material-symbols-outlined'>shopping_cart_checkout</span></a>";

					}else{
						echo " <a href='login.php' class='loginlink'>LOG IN</a>";
						echo " <a href='registration.php' class='signuplink'>SIGN UP</a>";
					}
				?>
               
        </div>
	</header>
