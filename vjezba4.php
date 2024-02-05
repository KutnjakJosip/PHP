<!DOCTYPE HTML>
<html>
	<head>
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Josip Kutnjak">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	</head>
	<body>
		<form method="post" action="">
			<p><label for="a">Vrijednost a:</label>
			<input type="number" name="a" id="a"></p>

			<p><label for="b">Vrijednost b:</label>
			<input type="number" name="b" id="b"></p>

			<button type="submit">Posalji</button>
		</form>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$_a = $_POST['a'] ?? '';
				$_b = $_POST['b'] ?? '';
				$c = (3 * $_a - $_b) / 2;

				print '
				<div class="odlomak">
					<p class="vra">a=' . $_a . '</p>
					<p>b=' . $_b . '</p>
					<p>c=(3*' . $_a . '-' . $_b . ')/2=' . $c . '</p>
				</div>';
			}
		?>
	</body>
</html>
