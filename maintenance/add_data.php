<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	// variables for input data
	$Medicine_Name = $_POST['Medicine_Name'];
	$Description = $_POST['Description'];
	// variables for input data
	
	// sql query for inserting data into database
	$sql_query = "INSERT INTO medicines(medicine_name,medicine_description) VALUES('$Medicine_Name','$Description')";
	// sql query for inserting data into database
	
	// sql query execution function
	$res_log = mysql_query($sql_query);
			
		
	if($res_log)
	{
		?>
		<script type="text/javascript">
		alert('Data Are Inserted Successfully ');
		window.location.href='../maintenance/maintenance_index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while inserting your data');
		</script>
		<?php
	}
	// sql query execution function
			echo "res_log is " + $res_log + mysql_error(); 
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
    <label>Medicine Maintenance Screen</a></label>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="../maintenance/maintenance_index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="Medicine_Name" placeholder="Medicine Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Description" placeholder="Description" required /></td>
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