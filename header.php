<?php
session_start();
$Cart_Total=0;
foreach ($_SESSION["cart"] as $item){
	$Cart_Total+=$item['total_price'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include_once ('./styles.php');?>
	<title>Home | Furnixury.</title>
</head>
<body>

<div class="line">
</div>

<div class="container">
	<div class="row">
		<nav>
			<h2 class="logo-title">
				Furni<span class="second-part">xury</span > <span class="point">.</span>
			</h2>
			<ul class="links">
				<li class="link"><a href="./index.html">Home</a></li>
				<li class="link"><a href="./shop.html">Shop</a></li>
				<li class="link"><a href="./shop.html">Categories</a></li>
				<li class="link"><a href="./contact-us.html">Contact Us</a></li>
			</ul>
			<div class="account-bar">
				<i class="fas fa-search "></i>
				<i class="fas fa-user-alt"></i>
				<i class="fas fa-shopping-cart"></i>
				<span class="amount" id="cart_total">$<?php echo $Cart_Total ?></span>
			</div>
		</nav>

	</div>
</div>