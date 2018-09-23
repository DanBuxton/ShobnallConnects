<!DOCTYPE HTML>

<?php
require '../../core/process.php';
if (filter_input(INPUT_SERVER, "REQUEST_METOD") == "post") {
    
} else {
    echo 'Hi There';

    $db->query("SELECT * "
                    . "FROM Markers "
                    . "INTO OUTFILE 'http://" . $remoteURL . "/locations.csv' "
                    . "FIELDS TERMINATED BY ',' "
                    . "ENCLOSED BY '\"' "
                    . "LINES TERMINATED BY '\n';") or die('Error with database');

    echo 'Hi There After';
}