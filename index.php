<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<title></title>
	</head>
	<body>
		<div class="container">

			<?php

				$password = $_GET['pswd'];

				if ($password == 'Boolean') {
					echo '<p class="green"> Password Corretta</p>';
				} else {
					echo '<p class="red"> Password Errata</p>';
				}

			 ?>

		</div>

	</body>
</html>

<?php




 ?>
