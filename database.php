<?php

try{
	$db = new PDO("mysql:host=localhost;dbname=shirts4mike;port=3306","root","root");
	$db->exec("SET NAMES 'utf8'");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	var_dump($db);
}catch(Exception $e){

	echo "Could not connect to the database";
	exit;
}

try{
	$results = $db->query("SELECT name,price FROM products ORDER BY sku ASC");
	echo "Our query ran successfully!";
	var_dump($results);
}catch(Exception $e){
	echo "Data could not be found";
	exit;
}

echo "<pre>";
var_dump($results->fetchAll(PDO::FETCH_ASSOC));
