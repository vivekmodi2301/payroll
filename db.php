<?php
$con =mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DB);
function addedit($table,$data,$id="")
{
	$con =mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DB);
$qry="insert into $table set ";
$wh='';
if($id)
{
$qry="update $table set ";
$wh=" where id=$id ";
	}
	foreach($data as $colname=>$colvalue)
	{
		$qry.="$colname='".addslashes($colvalue)."',";	
			}
	$qry=substr($qry,0,-1).$wh;		
	mysqli_query($con,$qry);
	//echo $qry;
	//exit;		
}
function deleteRecord($table,$id)
{
	$con =mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DB);
	mysqli_query($con,"delete from $table where id=$id");	
	}
function getValue($table,$col,$id)
{
	$con =mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DB);
	$rs=mysqli_query($con,"select $col from $table where id=$id");
	//echo "select $col from $table where id=$id";
	//exit;
	$data=mysqli_fetch_assoc($rs);
	return $data[$col]; 
}
?>