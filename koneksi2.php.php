<?php 
$dbtype = "mysql"; // ini tipe databasenya
	$dbhost = "localhost"; //host server
	$dbname = "sampledb";		//nama database
	$dbuser = "root";	//username database
	$dbpassword = "";		//password database
	$dbcharset = "utf8";		//character database
	
	$dsn = "mysql:host=$dbhost;dbname=$dbname;charset=$dbcharset";	

	$dbconn = new PDO($dsn, $dbuser, $dbpassword); // ini saja yang saya ubah dikit doang kok

	//datanya masih rancu ni, testing testing	
	?>