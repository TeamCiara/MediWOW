<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

  $query = "SELECT * FROM 'sickness'";
  $result = mysql_query($query);
  while($row=mysql_fetch_assoc($result)){
     echo "<option value='".$row["id"]."'>".$row["sectionName"]."</option>";
   }?>       