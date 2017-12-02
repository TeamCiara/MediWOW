<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM prescription WHERE prescription_id=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$medicine_id = $_POST['medicine_id'];
	$symptom_id = $_POST['symptom_id'];
	$sickness_id = $_POST['sickness_id'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE prescription SET medicine_id='$medicine_id', sickness_id='$sickness_id', symptom_id='$symptom_id' WHERE prescription_id=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='../maintenance/prescription_maintenance_index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: ../maintenance/symptoms_maintenance_index.php");

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
    <label>MediWOW</a></label>
    </div>
</div>

<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
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
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>