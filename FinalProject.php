<?php
//Turn on error reporting
ini_set('display_errors', 'On');
//Connects to the database
$mysqli = new mysqli("oniddb.cws.oregonstate.edu","meadosc-db","oXUqqY97BfzGwbV7","meadosc-db");

//Error handling
if($mysqli->connect_errno){
	echo "Connection error " . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="FinalProjectStyle.css">
	<script src = ""></script>
</head>
<body>
	
<!-- Patients table -->
	<div>
	<table>
		 <tr>
			<th>Patients</th>
		</tr>
		<tr>
			<td>id</td>
			<td>Fname</td>
			<td>Lname</td>
		</tr>
	</table>

<!-- injuries table -->	
	<table>
		 <tr>
			<th>Injuries</th>
		</tr>
		<tr>
			<td>id</td>
			<td>Structure_id</td>
			<td>Patient_id</td>
			<td>Type</td>
			<td>Date</td>
		</tr>
	</table>

<!-- Structures table -->	
	<table>
		 <tr>
			<th>Structures</th>
		</tr>
		<tr>
			<td>id</td>
			<td>Structure</td>
		</tr>
	</table>
	
<!-- Recovery table -->	
	<table>
		 <tr>
			<th>Recovery</th>
		</tr>
		<tr>
			<td>id</td>
			<td>Recovery</td>
		</tr>
	</table>

<!-- Injuries_Recovery table -->	
	<table>
		 <tr>
			<th>Injuries_Recovery</th>
		</tr>
		<tr>
			<td>Injury_id</td>
			<td>Recovery_id</td>
		</tr>
	</table>

<!-- Injuries_ConnectedStructure table -->	
	<table>
		 <tr>
			<th>Injuries_ConnectedStructure</th>
		</tr>
		<tr>
			<td>Injury_id</td>
			<td>Connected_Structure_id</td>
		</tr>
	</table>
	</div>
	
<!-- Form for Patients -->	
	<div>
	<form method="POST" action="FinalProject.html"> <!-- Change the action later-->
		<fieldset>
			<legend>Patient</legend>
			<p>First Name: <input type="text" name="firstName"/></p>
			<p>Last Name: <input type="text" name="lastName"/></p>
			<p><input type="submit" /></p>
		</fieldset>
	</form>
	</div>

<!-- Form for Injuries -->	
	<div>
	<form method="POST" action="FinalProject.html"> <!-- Change the action later-->
		<fieldset>
			<legend>Injuries</legend>
			<p>Structure: <input type="text" name="structure"/></p>
			<p>Type of Injury: <input type="text" name="injType"/></p>
			<p>Date: <input type="text" name="date"/></p>
			<p>Connected to: <input type="text" name="injType"/></p> <!-- May change this later-->
			<p><input type="submit" /></p>
		</fieldset>
	</form>
	</div>
	
</body>
</html>
