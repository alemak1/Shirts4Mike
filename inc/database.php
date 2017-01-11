<?php

try{
	$db = new PDO("mysql:host=localhost;dbname=shirts4mike;port=3306","root","root");
	$db->exec("SET NAMES 'utf8'");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){

	echo "Could not connect to the database";
	exit;
}


