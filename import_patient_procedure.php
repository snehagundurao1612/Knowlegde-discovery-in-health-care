<?php
 $conn = @mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("db_6339",$conn);

if(isset($_POST['submit']))
{
$file=$_FILES['file']['tmp_name'];
$handle=fopen($file,"r");

while(($fileop = fgetcsv($handle,10000,",")) !==FALSE)
        {
	$att1=$fileop[0];
	$att2=$fileop[16];
	$att3=$fileop[17];
	
	


$sql= mysql_query("insert into patient_procedure(adm_id,procedure_code,code_indicator) values ('$att1','$att2',1)");
$sql= mysql_query("insert into patient_procedure(adm_id,procedure_code,code_indicator) values ('$att1','$att3',2)");

$sql= mysql_query("DELETE FROM patient_procedure WHERE procedure_code=''");
       

}
if($sql)
{
echo 'data uploaded successfully';
} 

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Untitled</title>
<link rel="stylesheet" type="text/css" href="../style/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div id="mainWrapper">
<form method="post" action="index.php" enctype="multipart/form-data">
<input type="file" name="file" />
<br />
<input type="submit" name="submit" />
</form>

</div>
</body>
</html>
