<?php

require 'database.php';

$database = new Database();
$db = $database->db;

$remoteURL = "shobnallconnects.epizy.com";

//echo "Server: " . $database->getServer() . "<br />";
//echo "Username: " . $database->getUsername() . "<br />";
//echo "Database: " . $database->getDatabase() . "<br />";

date_default_timezone_set('Europe/London');

include 'functions.php';
