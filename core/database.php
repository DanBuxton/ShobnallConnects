<?php

class Database {

    // Server Login details
    private $server = "sql204.epizy.com";
    private $username = "epiz_22098015";
    private $password = "Shobnall";
    private $database = "epiz_22098015_ShobnallConnects";
//    private $server = "localhost";
//    private $username = "root";
//    private $password = "root";
//    private $database = "ShobnallConnects";

    public $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=$this->server;dbname=$this->database", $this->username, $this->password) or die("Database connection aborted" . $this->db->connect_error);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//        $this->db->query("
//            CREATE TABLE IF NOT EXISTS Markers (
//                name varchar(50) NOT NULL,
//                website varchar(100) DEFAULT NULL,
//                lat double(10,2) NOT NULL,
//                lng double(10,2) NOT NULL,
//                type varchar(20) NOT NULL,
//                address varchar(100) DEFAULT NULL,
//                id int AUTO_INCRIMENT NOT NULL,
//                phone_number varchar(20) DEFAULT NULL,
//                description varchar(200) NOT NULL
//            );
//            
//            ALTER TABLE Markers
//                ADD PRIMARY KEY ('id'),
//                ADD UNIQUE KEY 'id' ('id'),
//                ADD KEY 'id_2' ('id'),
//                ADD KEY 'id_3' ('id');
//        ");

//        $this->db->query("INSERT INTO IF NOT EXISTS Markers (name, website, x, y, type, address, phone_number, description) VALUES ('', , '', '', '', '', '', '', '');");
    }

    public function getServer() {
        return $this->server;
    }

    public function getusername() {
        return $this->username;
    }

    public function getDatabase() {
        return $this->database;
    }

    public function Dispose() {
        $this->db = null;
    }

}
