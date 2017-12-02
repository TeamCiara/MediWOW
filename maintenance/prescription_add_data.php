<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))
{
	// variables for input data
	$medicine_id = $_POST['medicine_id'];
	$symptoms_id = $_POST['symptom_id'];
	$sickness_id = $_POST['sickness_id'];
	// variables for input data
	
	
	
	// sql query for inserting data into database
	$sql_query = "INSERT INTO prescription(medicine_id, symptom_id, sickness_id) VALUES('$medicine_id', '$symptoms_id', '$sickness_id')";
	
	// sql query for inserting data into database
	
	// sql query execution function
	$res_log = mysql_query($sql_query);
			
		
	if($res_log)
	{
		?>
		<script type="text/javascript">
		alert('Data Are Inserted Successfully ');
		window.location.href='../maintenance/prescription_maintenance_index.php';
		</script>
		<?php
	}
	else
	{
		echo "<p>HERE</p>";
		?>
		<script type="text/javascript">
		alert('error occured while inserting your data');
		</script>
		
		<?php
	}
	// sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MediWOW</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>Prescriptions Maintenance Screen</a></label>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="../maintenance/prescriptions_maintenance_index.php">back to main page</a></td>
    </tr>
    <tr>
    <td class="styled-select">
	<?php
		echo "Select Medicine : ";
		echo "<select name=\"medicine_id\">";
			$query = "SELECT * FROM medicines";
			
			$result = mysql_query($query);
			while($row=mysql_fetch_assoc($result)){
				echo "<option value='".$row["medicine_id"]."'>".$row["medicine_name"]."</option>";
				$medicine_id = $row["medicine_id"];
			}
		echo "</select>";
		echo "<br><br>";
   ?>  
   </td>
   
    </tr>
    <tr>
   <td class="styled-select">
	<?php
		echo "Select Symptoms : ";
		echo "<select name=\"symptom_id\">";
			$query = "SELECT * FROM symptoms";
			
			$result = mysql_query($query);
			while($row=mysql_fetch_assoc($result)){
				echo "<option value='".$row["symptom_id"]."'>".$row["symptom_name"]."</option>";
				$symptom_id = $row["symptom_id"];
			}
		echo "</select>";
		echo "<br><br>";
   ?>  
   </td>
    </tr>
	
	<tr>
   <td class="styled-select">
	<?php
		echo "Select Sickness : ";
		echo "<select name=\"sickness_id\">";
			$query = "SELECT * FROM sickness";
			
			$result = mysql_query($query);
			while($row=mysql_fetch_assoc($result)){
				echo "<option value='".$row["sickness_id"]."'>".$row["sickness_name"]."</option>";
				$sickness_id = $row["sickness_id"];
			}
		echo "</select>";
		echo "<br><br>";
   ?>  
   </td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>