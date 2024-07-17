<?php
	require "form.php";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<?php
		if(isset($_GET['id'])) {
		$productId = intval($_GET['id'])-1001;
		
		echo $name[$productId];
		echo $price[$productId];
	} else {
		header('Location: index.php');
		exit;
	}
	?>
	<header>
		<div>
			<div id="logo">
				<a href="index.php">SKLEP</a>
			</div>
			<nav>
				<ul>
					<li>
						<a href="#">xxxxx</a>
					</li>
					<li>
						<a href="#">xxxxx</a>
					</li>
					<li>
						<a href="#">xxxxx</a>
					</li>
					<li>
						<a href="#">xxxxx</a>
					</li>
					<li>
						<a href="#">xxxxx</a>
					</li>
				</ul>
			</nav>
			<div id="nav_add">
				<div id="cart">
					<a href="cart.php">
						KOSZYK
					</a>
				</div>
				<div id="login">
					<a href="#">
						LOGIN
					</a>
				</div>
			</div>
		</div>
	</header>
	<main>
		<div id="picture">
			
		</div>
		<div id="descript">
			<?php
				echo $name[$productId];
				echo $price[$productId];
			?>
			<a href="#">DO KOSZYKA</a>
		</div>
	</main>
	<div style="clear:both;"><div>
	<footer>
	</footer>
	<script src="cart.js"></script>
</body>
</html>