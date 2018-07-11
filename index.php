<!DOCTYPE html>
<html>
<head>
	<title>PHP Learning</title>
	<style>
		
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>

</head>
<body>

	<header>
		<h1>
			<?php 

				// fetching a URL parameters from the address bar.
				$name = $_GET['name'];

				echo "Hello, $name";

			 ?>
		</h1>	
		
		<!-- Same as < ? php -->
		<!-- Function for security -->
		<h1> <?= "Hello, " . htmlspecialchars($_GET['name']) ?></h1>

	</header>
	

</body>
</html>