<?php

//connect to the database
include 'connection.php';

//grab data posted
$reading = $_POST['reading'];
$date = $_POST['date'];
$time = $_POST['time'];

if($reading){
	$sql = "INSERT INTO `databetic` (`reading`, `date`, `time`) VALUES ('$reading', '$date', '$time');";
	if(!$result = $mysqli->query($sql)){
	    die('There was an error running the query [' . $mysqli->error . ']');
	}	
} else {
	echo 'No reading supplied, nothing entered into DB.';
}

if($mysqli->affected_rows){
	echo 'Reading entered into DB.';	
} else {
	echo 'Oops, something went wrong, and the the reading was not added into the DB.';
}

$mysqli->close();


?>