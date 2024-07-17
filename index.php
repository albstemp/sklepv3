<?php
	require "products.php";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<title>SKLEP</title>
	<charset name="utf-8">
	<meta content="author" name="Albert Stępniewski">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
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
					KOSZYK
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
		<div>
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
			<article>
				<?php 
				$pozycji_na_stronie = 20;
				$ilosc_stron = ceil($number / $pozycji_na_stronie);
				$strona = isset($_GET['strona']) ? $_GET['strona'] : 1;
				$start_index = ($strona-1) * $pozycji_na_stronie;
				for($i=$start_index;$i<$start_index+$pozycji_na_stronie;$i++) {
					echo @$products[$i];
				}
				?>
			</article>
		</div>
			<?php
			echo '<div>';

			if ($strona > 1) {
				echo '<a href="?strona='.($strona-1).'">Poprzednia</a> ';
			}
			for ($i = 1; $i <= $ilosc_stron; $i++) {
				if ($i == $strona) {
					echo $i . ' ';
				} else {
					echo '<a href="?strona='.$i.'">'.$i.'</a> ';
				}
			}

			if ($strona < $ilosc_stron) {
				echo '<a href="?strona='.($strona+1).'">Następna</a>';
			}

			echo '</div>';
		?>
	</main>
	<footer>
		
	</footer>
	<script src="mechanics.js"></script>
	<script src="cart.js"></script>
</body>
</html>