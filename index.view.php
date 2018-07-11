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

	<ul>
	
		<?php foreach($person as $key => $value) : ?>

		<li>
			<b><?= ucwords($key); ?></b>: <?= $value ?>
		</li>

		<?php endforeach; ?>


		<?php
			foreach($names as $name) {

			echo "<li>$name</li>";
		}
		?>

		<b>Grad: </b> <?= $person['grad']? "YES" : "Undergrad" ?>

		<?php if($person['grad']) : ?>
			🎉
		<?php else : ?>
			UnderGrad :(
		<?php endif ?> 

	</ul>
	

</body>
</html>