<!DOCTYPE HTML>

<?php
require '../../core/process.php';

echo 'Hi There';

$db->query("SELECT * "
        . "FROM Markers "
        . "INTO OUTFILE 'http://" . $remoteURL . "/locations.csv' "
        . "FIELDS TERMINATED BY ',' "
        . "ENCLOSED BY '\"' "
        . "LINES TERMINATED BY '\n';") or die('Error with query');

echo 'Hi There After';