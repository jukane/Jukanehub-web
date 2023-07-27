<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jukanehub</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700;&display=swap"rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"rel="stylesheet">
</head>

<body>
	<div class="header">
		
	
<div class="container">
<div class="navbar">
	<div class="logo">
		<img src="logo.png" width="90px">
	</div>
<nav>
	<ul id="MenuItems">
		<li><a href="welcome.php">Home</a></li>
		<li><a href="products.html">Products</a></li>
		<li><a href="register.php">Sign Up</a></li>
		<li><a href="login.php">Sign In</a></li>
		<li><a href="log out.html">Reset/Log out</a></li>
</ul>
</nav>
<img src="cart.png" width="30px" height="30px">
<img src="menu.png" class="menu-icon" onclick="menutoggle( )">
</div>
<div class="row"> 
<div class="col-2">
	<h1>Welcome to JukaneHub<br>Where we value your Outfit.</h1>
	<p>
		Order your favourite Shirt, Dress, Trouser and shoes<br> at an affordable price</p>
<a href="products.html"class="btn">View more &#8594;</a>
</div class="col-2">
<img src="airforce4.jpeg">
</div>
</div>
</div> 
<!---featured categories--->
<div class="categories">
	<div class="small-container">
		<div class="row">
		<div class="col-3"><img src="diorpack.jpeg"></div>
		<div class="col-3"><img src="hood1.jpeg"></div>
		<div class="col-3"><img src="airjordan1.jpeg"></div>	
		</div>
		</div>
	</div>
	</div>
<!---featured categories--->


 <div class="small-container">
 	<h2 class="title">Featured Products</h2>
 	<div class="row">
 	<div class="col-4">
 	<img src="shirtflame2.jpeg">
 	<h4>Flames shirt-male</h4>
 	<div class="rating">
 	<i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
 	<i class="fa fa-star"></i>
 	<i class="fa fa-star-o"></i>
    </div>
 	<p>Ksh 1,399.00</p>	
 	</div>	
 	<div class="col-4">
 	<img src="delta3.jpeg">
 	<h4>Delta boots</h4>
 	<div class="rating">
 	<i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
 	<i class="fa fa-star"></i>
 	<i class="fa fa-star-o"></i>
    </div>
 	<p>Ksh 4,000.00</p>	
 	</div>	
 	<div class="col-4">
 	<img src="cap2.jpeg">
 	<h4>stand cap</h4>
 	<div class="rating">
 	<i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
 	<i class="fa fa-star"></i>
 	<i class="fa fa-star-half-o"></i>
    </div>
 	<p>Ksh 499.00</p>	
 	</div>	
 	</div>
 </div>
<!------------testimonials--->
<div class="testimonial">
	<div class="small-container">
		<div class="row">
		<div class="col-3">
			<i class="fa fa-quote-left"></i>
			<p>Jukane Hub have really done me good, I needed a shoe for my fiance, so bought it here.</p>
			<div class="rating">
 	<i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
 	<i class="fa fa-star"></i>
 	<i class="fa fa-star-half-o"></i>
    </div>
    <img src="deadlock.jpg">
		<h3>Anabell Ouma</h3>
		</div>
		<div class="col-3">
			<i class="fa fa-quote-left"></i>
			<p>What a nice website it is, designer clothes available at affordable cost.</p>
			<div class="rating">
 	<i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
 	<i class="fa fa-star"></i>
 	<i class="fa fa-star-half-o"></i>
    </div>
    <img src="jeddy.jpg">
		<h3>Jeddy Mwende</h3>
		</div>
	
<div class="col-3">
			<i class="fa fa-quote-left"></i>
			<p>I feel that this is the best site ever, in terms of selling shoes.</p>
			<div class="rating">
 	<i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
 	<i class="fa fa-star"></i>
 	<i class="fa fa-star-half-o"></i>
    </div>
    <img src="edwin.jpg">
		<h3>Edwin Karanja</h3>
		</div>
	
	</div>
</div>
	</div>
	</div>
</div>

<!-----brand--->
<div class="brands">
	<div class="small-container">
		<div class="row">
			<div class="col-5">
				<img src="cocacola.png">
				
			</div>
			<div class="col-5">
				<img src="nike.png">
				
			</div>
			<div class="col-5">
				<img src="logo.png">
				
			</div>
			<div class="col-5">
				<img src="adidas.png">
				
			</div>
			<div class="col-5">
				<img src="pepsi.jpg">
				
			</div>
		</div>
		
	</div>
	
</div>
<!----footer--->
<div class="footer">
	<div class="container">
		<div class="row">
			
            <div class="footer-col-2">
				<img src="logo.png">
				<p>Don't pray things to be easier for you, pray that you become better.</p>
			</div>
			
			
		</div>
		<hr>
		<p class="copyright">Copyright 2022 - JUKANE HUB</p>
	</div>
	
</div>
<!--------js for toggle menu--------->


<script>
var MenuItems = document.getElementById("MenuItems");

MenuItems.style.maxHeight = "0px";

  function menutoggle(){
	if (MenuItems.style.maxHeight == "0px") 
		{
			MenuItems.style.maxHeight = "200px";
		}
	else
	{
			MenuItems.style.maxHeight = "0px";
		}
}
</script>
</body>
</html>