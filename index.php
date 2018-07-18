<?php
session_start(); 
include "config.php";
include "db.php";
include "header.php";
$mod="login";
$do="login";

if(isset($_SESSION['payroll_admin'])){
	if(isset($_GET['mod']))
	{
		$mod=$_GET['mod'];
		$do=$_GET['do'];
	}
}

if(isset($_GET['mod']) && $_GET['mod']!='login'){
include "left.php";
}

include "module/$mod/$do.php";
include "footer.php";
?>
