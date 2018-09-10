<?php
	class Database {
		
		// Server Login details
		/**/
		public $server = "sql204.epizy.com";
		public $username = "epiz_22098015";
		private $password = "Shobnall";
		public $database = "epiz_22098015_ShobnallConnects";
		/**/

		/*
		public $server = "localhost";
		public $username = "root";
		private $password = "root";
		public $database = "ShobnallConnects";
		/**/

		public $db;

		public function __construct()
		{
			$this->db = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password) or die("Database connection aborted" . $this->db->connect_error);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$this->db->query("
				CREATE TABLE IF NOT EXISTS markers (
					name varchar(50) NOT NULL,
					website varchar(100) DEFAULT NULL,
					x int(3) NOT NULL,
					y int(3) NOT NULL,
					type varchar(20) NOT NULL,
					address varchar(100) DEFAULT NULL,
					id varchar(36) NOT NULL,
					phone_number varchar(20) DEFAULT NULL,
					description varchar(200) NOT NULL
				);
				ALTER TABLE markers
					ADD PRIMARY KEY ('id'),
					ADD UNIQUE KEY 'id' ('id'),
					ADD KEY 'id_2' ('id'),
					ADD KEY 'id_3' ('id');");
			
			//$this->db->query("");
		}

		public function Dispose()
		{
			$this->db = null;
		}
	}
?>
