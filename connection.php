<?php

// Import config file
include('config.php');

// Make Connection
$connection = connection();

function connection() {
	try {
		$connection = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASS);
	} catch(PDOException $e) {
		exit($e->getMessage());
	}
	
	return $connection;
}
