<?php

try{
	$db = new PDO("mysql:host=". DB_HOST .";dbname=" . DB_NAME .";port=" . DB_PORT,DB_USER,DB_PASS);
	$db->exec("SET NAMES 'utf8'");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){

	echo "Could not connect to the database";
	exit;
}


