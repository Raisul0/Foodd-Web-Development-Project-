<?php

include_once("../Data/dboy_access.php");
$uname=$_REQUEST['uname'];
    deletedboy_dboyinfo($uname);
    deletedboy_user($uname);
	header("location: DeleteDBOy.php");

?>