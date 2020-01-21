<?php

// Import config file
include('config.php');

// Make Connection
$connection = connection();
echo "connection successfully";

function connection() {
	try {
		$connection = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASS);
	} catch(PDOException $e) {
		exit($e->getMessage());
	}
	
	return $connection;
}

//calling the update function
if (isset($_GET['update'])) {
	update ($connection);
	echo "Rows Affected!";
}

//update the record of the bolg
function update($connection) {
	$update= $connection->prepare("UPDATE user SET first_name = :name WHERE id= :id");

	$name ='Zahra' ;
	$id = '2';
	$update->bindParam(':name',$name);
	$update->bindParam(':id',$id);

	$update->execute();
	


}
