<?php
	include_once("../Data/Orders_access.php");
	
		setReady($_GET["orderid"]);
	header("location: Business_Home.php");

?>