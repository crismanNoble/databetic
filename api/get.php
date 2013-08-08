<?php

include 'connection.php';

$myArray = array();
if ($result = $mysqli->query("SELECT * FROM databetic")) {

    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    }
    echo json_encode($myArray);
}

$result->close();
$mysqli->close();

?>