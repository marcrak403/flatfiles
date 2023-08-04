<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styl4.css">
	<meta charset="utf-8">
	<title>Restauracja Kulinaria.pl</title>
</head>
<body>
	<header>
		<h2>Restauracja Kulinaria.pl Zaprasza!</h2>
	</header>
	<nav>
		<p>Dania mięsne zamówisz już od  
		<?php 
			$connect = mysqli_connect('localhost','root','','baza');
			$ask1 = "SELECT MIN(`cena`) FROM `dania` WHERE `typ`=2";
			$result1 = mysqli_query($connect, $ask1);
			while ($line = mysqli_fetch_row($result1))
			{
				echo $line[0];
			}

			mysqli_close($connect);

		?> złotych</p>
		<img src="menu.jpg" alt="Pyszne spaghetti"><br>
		<a href="menu.jpg">Pobierz obraz</a>
	</nav>
	<main>
		<h3>Przekąski</h3>
		<?php 
			$connect = mysqli_connect('localhost','root','','baza');
			$ask2 = "SELECT `id`, `nazwa`, `cena` FROM `dania` WHERE `typ` = 3";
			$result2 = mysqli_query($connect, $ask2);
			while ($line2 = mysqli_fetch_row($result2))
			{
				echo '<p>'.$line2[0].' '.$line2[1].' '.$line2[2].'</p>';
			}
			
			mysqli_close($connect);
		?>
	</main>
	<aside>
		<h3>Napoje</h3>
		<?php 
			$connect = mysqli_connect('localhost','root','','baza');
			$ask3 = "SELECT `id`, `nazwa`, `cena` FROM `dania` WHERE `typ` = 4";
			$result3 = mysqli_query($connect, $ask3);
			while ($line3 = mysqli_fetch_row($result3))
			{
				echo '<p>'.$line3[0].' '.$line3[1].' '.$line3[2].'</p>';
			}

			mysqli_close($connect);
		?>
	</aside>
	<footer>
		Stronę internetową opracował: <i>PESEL</i>
	</footer>
</body>
</html>