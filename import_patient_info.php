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
	$att2=$fileop[1];
	$att3=$fileop[2];
	$att4=$fileop[3];
	$att5=$fileop[4];
	$att6=$fileop[5];
	$att7=$fileop[6];
	$att8=$fileop[7];
	$att9=$fileop[8];
	$att10=$fileop[9];
	$att11=$fileop[10];
	$att12=$fileop[11];
	$att13=$fileop[12];
	$att14=$fileop[14];
	$att15=$fileop[18];



$sql= mysql_query("insert into patient_info(adm_id,age,sex,race,day_of_admission,discharge_status,stay_indicator,drg_code,length_of_stay,drg_price,total_charge,covered_charge,POA_indi_1,diag_1,discharge_dest) values ('$att1',$att2,$att3,$att4,$att5,'$att6','$att7',$att8,$att9,$att10,$att11,'$att12','$att13','$att14',$att15)");
       

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
