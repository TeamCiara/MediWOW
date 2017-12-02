<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
	echo "<p>DELETE " . $_GET['delete_id'] . "</p>";
	$sql_query="DELETE FROM prescription WHERE prescription_id=".$_GET['delete_id'];
	$res = mysql_query($sql_query);
	if(!$res){
		echo "delete error";
	}
	else {
		echo "deleted successfully";
	}
	
	header("Location: $_SERVER[PHP_SELF]");
}
else{
	echo "<p>NOt set</p>";
}
// delete condition

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MediWOW</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
	if(confirm('Sure to edit ?'))
	{
		window.location.href='prescription_edit_data.php?edit_id='+id;
	}
}
function delete_id(id)
{
	console.log("id is " + id);
	if(confirm('Sure to Delete ?'))
	{
		window.location.href='prescription_maintenance_index.php?delete_id=' + id;
	}
}
</script>
</head>
<body>

<center>

<div id="header">
	<div id="content">
    <label>MediWOW</label>
    </div>
</div>

<div id="body">

	<a href="/MediWOW/login-home.php">Home</a>

	<div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="prescription_add_data.php">ADD prescription</a></th>
    </tr>
    <th>prescription ID</th>
    <th>Medicine</th>
    <th>Symptoms</th>
    <th>Sickness</th>
    </tr>
    <?php
		$sql_query="SELECT p.prescription_id
						  ,m.medicine_name
						  ,s2.symptom_name
						  ,s1.sickness_name
					  FROM prescription p
						  ,sickness s1
						  ,symptoms s2
						  ,medicines m
					 WHERE p.symptom_id = s2.symptom_id
					   AND p.sickness_id = s1.sickness_id
					   AND P.medicine_id = m.medicine_id";
	$result_set=mysql_query($sql_query);
	if(mysql_num_rows($result_set)>0)
	{
        while($row=mysql_fetch_row($result_set))
		{
		?>
            <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
            <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
            </tr>
        <?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="5">No Data Found !</td>
        </tr>
        <?php
	}
	?>
    </table>
    </div>
</div>

</center>
</body>
</html>