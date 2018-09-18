<?php

require '../core/process.php';
require '../Marker.php';

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == "GET") {
    if (filter_input(INPUT_GET, 'id') && filter_input(INPUT_GET, 'name') &&
            filter_input(INPUT_GET, 'lat') && filter_input(INPUT_GET, 'long') &&
            filter_input(INPUT_GET, 'type') &&
            filter_input(INPUT_GET, 'address') &&
            filter_input(INPUT_GET, 'website') &&
            filter_input(INPUT_GET, 'number') &&
            filter_input(INPUT_GET, 'desc')) {

        $sql = "UPDATE Markers SET name='" . filter_input(INPUT_GET, 'name') . "', x='" . filter_input(INPUT_GET, 'lat') . "', y='" . filter_input(INPUT_GET, 'long') . "', type='" . filter_input(INPUT_GET, 'type') . "', address='" . filter_input(INPUT_GET, 'address') . "', website='" . filter_input(INPUT_GET, 'website') . "', phone_number='" . filter_input(INPUT_GET, 'number') . "', description='" . filter_input(INPUT_GET, 'desc') . "'" .
                " WHERE id='" . filter_input(INPUT_GET, 'id') . "';";

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

//        $stmt = 
        $db->query($sql);

        //$stmt->execute();

        //echo $stmt->rowCount() . " record(s) added" . "<br />";

        //header('Location: ../Admin/');
    }
}
?>