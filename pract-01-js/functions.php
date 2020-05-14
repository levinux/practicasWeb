<?php

require 'config.php';

function opendb() {
	global $dsn;
	global $dbuser;
	global $dbpass;
	
	$conn = NULL;
	try {
		$conn = new PDO($dsn, $dbuser, $dbpass);
	} catch(PDOException $e) {
		die("Ocurrio un error al conectar a la db: " . $e->getMessage());
	}
	
	return $conn;
}

?>
