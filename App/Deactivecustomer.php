<?php

    include_once("../Data/user_access.php");
    $uname=$_REQUEST['uname'];
	$type=$_REQUEST['type'];
	if($type=="customer"){
		updatedeactive($uname);
	}
	else if($type=="c")
    {
		updateactive($uname);
	}
	header("location: administrative_home.php");

?>