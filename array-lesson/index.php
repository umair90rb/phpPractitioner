<?php

// temprary file for array function practice

class Task {
	public $title;
	public $description;
	public $status;
	
	public function __construct($title, $description, $status){
		$this->title = $title;
		$this->description = $description;
		$this->status = $status;
	}
}

$array = [
	new Task("First Task", "ABC", false),
	new Task("Second Task", "ABCh", false),
	new Task("Third Task", "ABCg", true),
	new Task("Forth Task", "ABCf", false),
	new Task("Fifth Task", "ABCd", true),
];

$modified = array_map(function($array){ 
	 return (array) $array;
}, $array);

$titles = array_column($array, 'title', 'description');


$taskUnCompleted = array_filter($array, function($array){
	return $array->status === false;
});

// $taskCompleted = array_filter($array, function($array){
	
	// return $array->status === true;
	
// });

var_dump($taskUnCompleted, $taskCompleted);