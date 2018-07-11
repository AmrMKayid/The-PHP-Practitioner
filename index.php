<?php


$names = [

	"Name1",
	"Name2",
	"Name3",
];


// Dict
$person = [
	'age' => 21,
	'name' => 'Amr',
	'grad' => false

];

$person['career'] = 'Dev';


var_dump($person);


// Remove from array
unset($person['age']);


var_dump($person);

// die(); // Code ends here

require "index.view.php";