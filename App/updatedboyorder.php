<?php

   include_once("../Data/order_access.php");
   include_once("../Data/account_access.php");
   
    $uname=$_REQUEST['uname'];
	$orderid=$_REQUEST['orderid'];
	$income_name="Service_charge_of_".$_REQUEST['uname'];
	$date_income=date("Y/m/d");
	addincome($income_name,150,$date_income);
    updateafterdone($uname,$orderid);
	header("location: Dboy_Home.php");

?>
 