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
	<h1>Cord Meados' Database for Musculoskeletal Injuries and Recovery</h1>
	<br>
	
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
	<!-- This php puts the patients data in the patients table -->
	<?php
	if(!($stmt = $mysqli->prepare("SELECT id, Fname, Lname FROM Patients;"))){
		echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
	}
	
	if(!$stmt->execute()){
		echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	if(!$stmt->bind_result($id, $Fname, $Lname)){
		echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	while($stmt->fetch()){
	 echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $Fname . "\n</td>\n<td>\n" . $Lname . "\n</td>\n</tr>";
	}
	$stmt->close();
	?>
	</table>
	<br>
	
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
	<!-- This php puts the injuries data in the table -->
	<?php
	if(!($stmt = $mysqli->prepare("SELECT id, Structure_id, Patient_id, Type, Date  FROM Injuries;"))){
		echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
	}
	
	if(!$stmt->execute()){
		echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	if(!$stmt->bind_result($id, $Structure_id, $Patient_id, $Type, $Date)){
		echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	while($stmt->fetch()){
	 echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $Structure_id . "\n</td>\n<td>\n" . $Patient_id . "\n</td>\n<td>\n" . $Type . "\n</td>\n<td>\n" . $Date . "\n</td>\n</tr>";
	}
	$stmt->close();
	?>
	</table>
	<br>
	
<!-- Structures table -->	
	<table>
		 <tr>
			<th>Structures</th>
		</tr>
		<tr>
			<td>id</td>
			<td>Structure</td>
		</tr>
	<!-- This php puts the Structures data in the table -->
	<?php
	if(!($stmt = $mysqli->prepare("SELECT id, Structure FROM Structures;"))){
		echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
	}
	
	if(!$stmt->execute()){
		echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	if(!$stmt->bind_result($id, $Structure)){
		echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	while($stmt->fetch()){
	 echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $Structure . "\n</td>\n</tr>";
	}
	$stmt->close();
	?>
	</table>
	<br>
	
<!-- Recovery table -->	
	<table>
		 <tr>
			<th>Recovery</th>
		</tr>
		<tr>
			<td>id</td>
			<td>Recovery</td>
		</tr>
	<!-- This php puts the Recovery data in the table -->
	<?php
	if(!($stmt = $mysqli->prepare("SELECT id, Recovery FROM Recovery;"))){
		echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
	}
	
	if(!$stmt->execute()){
		echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	if(!$stmt->bind_result($id, $Recovery)){
		echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	while($stmt->fetch()){
	 echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $Recovery . "\n</td>\n</tr>";
	}
	$stmt->close();
	?>
	</table>
	<br>
	
<!-- Injuries_Recovery table -->	
	<table>
		 <tr>
			<th>Injuries_Recovery</th>
		</tr>
		<tr>
			<td>Injury_id</td>
			<td>Recovery_id</td>
		</tr>
	<!-- This php puts the Injuries_Recovery data in the table -->
	<?php
	if(!($stmt = $mysqli->prepare("SELECT Injury_id, Recovery_id FROM Injuries_Recovery;"))){
		echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
	}
	
	if(!$stmt->execute()){
		echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	if(!$stmt->bind_result($Injury_id, $Recovery_id)){
		echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	while($stmt->fetch()){
	 echo "<tr>\n<td>\n" . $Injury_id . "\n</td>\n<td>\n" . $Recovery_id . "\n</td>\n</tr>";
	}
	$stmt->close();
	?>
	</table>
	<br>
	
<!-- Injuries_ConnectedStructure table -->	
	<table>
		 <tr>
			<th>Injuries_ConnectedStructure</th>
		</tr>
		<tr>
			<td>Injury_id</td>
			<td>Connected_Structure_id</td>
		</tr>
	<!-- This php puts the Injuries_ConnectedStructure data in the table -->
	<?php
	if(!($stmt = $mysqli->prepare("SELECT Injury_id, Connected_Structure_id FROM Injuries_ConnectedStructure;"))){
		echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
	}
	
	if(!$stmt->execute()){
		echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	if(!$stmt->bind_result($Injury_id, $Connected_Structure_id)){
		echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
	while($stmt->fetch()){
	 echo "<tr>\n<td>\n" . $Injury_id . "\n</td>\n<td>\n" . $Connected_Structure_id . "\n</td>\n</tr>";
	}
	$stmt->close();
	?>
	</table>
	</div>
	<br>
	
<!-- Form for Patients -->	
	<div>
	<form method="POST" action="addPatient.php">
		<fieldset>
			<legend>Patient</legend>
			<p>First Name: <input type="text" name="Fname"/></p>
			<p>Last Name: <input type="text" name="Lname"/></p>
			<p><input type="submit" /></p>
		</fieldset>
	</form>
	</div>
	<br>

<!-- Form for Structures -->	
	<div>
	<form method="POST" action="addStructure.php">
		<fieldset>
			<legend>Structure</legend>
			<p>Structure: <input type="text" name="Structure"/></p>
			<p><input type="submit" /></p>
		</fieldset>
	</form>
	</div>
	<br>
	
<!-- Form for Recovery -->	
	<div>
	<form method="POST" action="addRecovery.php">
		<fieldset>
			<legend>Recovery</legend>
			<p>Recovery: <input type="text" name="Recovery"/></p>
			<p><input type="submit" /></p>
		</fieldset>
	</form>
	</div>
	<br>
	
<!-- Form for Injuries -->	
	<div>
	<form method="POST" action="addInjury.php"> <!-- Change the action later-->
		<fieldset>
			<legend>Injuries</legend>
			<p>Type of Injury: <input type="text" name="Type"/></p>
			<p>Date: <input type="text" name="date"/></p>
			Structure: 
			<select name= structureDropDown>
				<!-- php to give options for Structure_id and enforce foreign key constraints -->
				<?php
				if(!($stmt = $mysqli->prepare("SELECT id, Structure FROM Structures"))){
					echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
				}
				
				if(!$stmt->execute()){
					echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				if(!$stmt->bind_result($id, $Structure)){
					echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				while($stmt->fetch()){
					echo '<option value=" '. $id . ' "> ' . $Structure . '</option>\n';
				}
				$stmt->close();
				?>
			</select><br>
			Patient First Name:
			<select name= patientDropDown>
				<!-- php to give options for patient_id and enforce foreign key constraints -->
				<?php
				if(!($stmt = $mysqli->prepare("SELECT id, Fname FROM Patients"))){
					echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
				}
				
				if(!$stmt->execute()){
					echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				if(!$stmt->bind_result($id, $Fname)){
					echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				while($stmt->fetch()){
					echo '<option value=" '. $id . ' "> ' . $Fname . '</option>\n';
				}
				$stmt->close();
				?>
			</select>
			<p><input type="submit" /></p>
		</fieldset>
	</form>
	</div>
	
<!-- Form for Injuries_Recovery -->	
	<div>
	<form method="POST" action="addInjuryRecovery.php"> <!-- Change the action later-->
		<fieldset>
			<legend>Injuries_Recovery</legend>
			Injury ID: 
			<select name= injuryRecoveryDropDown>
				<!-- php to give options for Structure_id and enforce foreign key constraints -->
				<?php
				if(!($stmt = $mysqli->prepare("SELECT id FROM Injuries"))){
					echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
				}
				
				if(!$stmt->execute()){
					echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				if(!$stmt->bind_result($id)){
					echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				while($stmt->fetch()){
					echo '<option value=" '. $id . ' "> ' . $id . '</option>\n';
				}
				$stmt->close();
				?>
			</select><br>
			Recovery ID: 
			<select name= patientDropDown>
				<!-- php to give options for patient_id and enforce foreign key constraints -->
				<?php
				if(!($stmt = $mysqli->prepare("SELECT id, Recovery FROM Recovery"))){
					echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
				}
				
				if(!$stmt->execute()){
					echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				if(!$stmt->bind_result($id, $Recovery)){
					echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				while($stmt->fetch()){
					echo '<option value=" '. $id . ' "> ' . $Recovery . '</option>\n';
				}
				$stmt->close();
				?>
			</select>
			<p><input type="submit" /></p>
		</fieldset>
	</form>
	</div>
	
<!-- Form for Injuries_ConnectedStructures -->	
	<div>
	<form method="POST" action="FinalProject.html"> <!-- Change the action later-->
		<fieldset>
			<legend>Injuries_ConnectedStructures</legend>
			Injury ID: 
			<select name= injuryConnectedStructuresDropDown>
				<!-- php to give options for Structure_id and enforce foreign key constraints -->
				<?php
				if(!($stmt = $mysqli->prepare("SELECT id FROM Injuries"))){
					echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
				}
				
				if(!$stmt->execute()){
					echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				if(!$stmt->bind_result($id)){
					echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				while($stmt->fetch()){
					echo '<option value=" '. $id . ' "> ' . $id . '</option>\n';
				}
				$stmt->close();
				?>
			</select><br>
			Connected Structure: 
			<select name= structureDropDown>
				<!-- php to give options for patient_id and enforce foreign key constraints -->
				<?php
				if(!($stmt = $mysqli->prepare("SELECT id, Structure FROM Structures"))){
					echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
				}
				
				if(!$stmt->execute()){
					echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				if(!$stmt->bind_result($id, $Structure)){
					echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				while($stmt->fetch()){
					echo '<option value=" '. $id . ' "> ' . $Structure . '</option>\n';
				}
				$stmt->close();
				?>
			</select>
			<p><input type="submit" /></p>
		</fieldset>
	</form>
	</div>	
	
</body>
</html>
