<?php
//Turn on error reporting
ini_set('display_errors', 'On');
//Connects to the database
$mysqli = new mysqli("oniddb.cws.oregonstate.edu","meadosc-db","oXUqqY97BfzGwbV7","meadosc-db");
if(!$mysqli || $mysqli->connect_errno){
	echo "Connection error " . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	
if(!($stmt = $mysqli->prepare("INSERT INTO Injuries(Type, Date, Structure_id, Patient_id) VALUES (?,?,?,?)"))){
	echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
}
if(!($stmt->bind_param("ssii",$_POST['Type'],$_POST['date'],$_POST['structureDropDown'],$_POST['patientDropDown']))){
	echo "Bind failed: "  . $stmt->errno . " " . $stmt->error;
}
if(!$stmt->execute()){
	echo "Execute failed: "  . $stmt->errno . " " . $stmt->error;
} else {
	echo "Added " . $stmt->affected_rows . " rows.";
}
?>
