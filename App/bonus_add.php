<?php

include_once("../Data/dboy_access.php");

	$uname=$_REQUEST['uname'];
    $result=searchUser_dboy($uname);
	$currentbonus=$result['currentbonus']+100;
	bounsadd($currentbonus,$uname);
	$result=searchUser_dboy($uname);
	
	$totalsalary=$result ['totalsalary']+100;
    
	updatetotal($totalsalary,$uname);
	header("location: Rating_details.php");
?>