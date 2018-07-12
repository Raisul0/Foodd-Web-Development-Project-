<?php

include_once("../Data/sponsor_access.php");
$name=$_REQUEST['name'];
    deletesponsor($name);
	header("location: sponsor.php");

?>