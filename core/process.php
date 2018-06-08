<?php
	require 'database.php';

	$database = new Database();
	$db = $database->db;

	date_default_timezone_set('Europe/London');

	include 'functions.php';
?>