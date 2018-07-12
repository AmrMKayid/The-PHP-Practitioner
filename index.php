<?php

require "functions.php";

/**
 * 
 */
class Task 
{
	protected $description;
	protected $completed = false;

	public function __construct($description)
	{
		# code...
		$this->description = $description;
	}

	public function complete() {
		$this->completed = true;
	}
}

$task = new Task('Task 1');

$task->complete();

dd($task);


// $names = [

// 	"Name1",
// 	"Name2",
// 	"Name3",
// ];


// // Dict
// $person = [
// 	'age' => 21,
// 	'name' => 'Amr',
// 	'grad' => false

// ];

// $person['career'] = 'Dev';


// var_dump($person);


// // Remove from array
// unset($person['age']);


// var_dump($person);

// dd($person);

// // die(); // Code ends here


require "index.view.php";