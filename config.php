<?php

return [
	'database'=>[
		'name'=>'todos',
		'username'=>'root',
		'password'=>'',
		'connection'=>'mysql:host=127.0.0.1',
		'option'=>[
			PDO::ATTR_ERRMODE	=>	PDO::ERRMODE_EXCEPTION
		]
	],
];