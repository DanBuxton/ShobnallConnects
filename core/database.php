<?php
	class Database {
		/*
		private $server = "sql204.epizy.com";
		private $username = "epiz_22098015";
		private $password = "Shobnall";
		private $database = "epiz_22098015_ShobnallConnects";
		/**/
		
		/**/
		private $server = "localhost";
		private $username = "root";
		private $password = "root";
		private $database = "ShobnallConnects";
		/**/
		
		public $db;

		public function __construct()
		{
			$this->db = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password) or die("Database connection aborted" . $this->db->connect_error);

			//$this->db = new mysqli($this->server, $this->username, $this->password, $this->database) or die("Database connection aborted" . $this->db->connect_error);
		}
	}
?>