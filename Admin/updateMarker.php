<?php

require '../core/process.php';
require '../Marker.php';

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['lat']) && isset($_GET['long']) && isset($_GET['type']) && isset($_GET['address']) && isset($_GET['website']) && isset($_GET['number']) && isset($_GET['desc'])) {

        $sql = "UPDATE Markers SET name='" . $_GET["name"] . "', x='" . $_GET["lat"] . "', y='" . $_GET["long"] . "', type='" . $_GET["type"] . "', address='" . $_GET["address"] . "', website='" . $_GET["website"] . "', phone_number='" . $_GET["number"] . "', description='" . $_GET["desc"] . "'" .
                " WHERE id='" . $_GET['id'] . "';";

        echo $sql . "<br />";

        $stmt = $db->prepare($sql);

        $stmt->execute();

        //echo $stmt->rowCount() . " record(s) updated" . "<br />";

        header('Location: ../Admin/');
    }
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['name']) && isset($_POST['lat']) && isset($_POST['long']) && isset($_POST['type']) && isset($_POST['address']) && isset($_POST['website']) && isset($_POST['number']) && isset($_POST['desc'])) {

        //$sql = "INSERT INTO Markers SET name='" . $_POST["name"] . "', x='" . $_POST["lat"] . "', y='" . $_POST["long"] . "', type='" . $_POST["type"] . "', address='" . $_POST["address"] . "', website='" . $_POST["website"] . "', phone_number='" . $_POST["number"] . "', description='" . $_POST["desc"] . "';";
        
        $sql = 'INSERT INTO Markers (\'name\', \'description\', \'x\', \'y\', \'type\', \'address\', \'number\', \'website\') VALUES (' . $_POST["name"] . ', ' . $_POST["desc"] . ', ' . $_POST["lat"] . ', ' . $_POST["long"] . ', ' . $_POST["type"] . ', ' . $_POST["address"] . ', ' . $_POST["number"] . ', ' . $_POST["website"] . ');';

        echo $sql . "<br />";

        $stmt = $db->prepare($sql);

        $stmt->execute();

        echo $stmt->rowCount() . " record(s) added" . "<br />";

        //header('Location: ../Admin/');
    }
}
?>