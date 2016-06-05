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
			<td>ID</td>
			<td>First name</td>
			<td>Last name</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Ima</td>
			<td>Hurt</td>
		</tr>
	</table>

<!-- injuries table -->	
	<table>
		 <tr>
			<th>Injuries</th>
		</tr>
		<tr>
			<td>ID</td>
			<td>Structure</td>
			<td>Type</td>
			<td>Date</td>
		</tr>
		<tr>
			<td>1</td>
			<td>femur</td>
			<td>fracture</td>
			<td>2010-02-12</td>
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