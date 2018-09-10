<?php
	require 'database.php';

	$database = new Database();
	$db = $database->db;

	//echo "Server: $database->server<br />";
	//echo "Username: $database->username<br />";
	//echo "Password: $database->password\n"; // Private
	//echo "Database: $database->database<br />";

	date_default_timezone_set('Europe/London');

	include 'functions.php';
?>
