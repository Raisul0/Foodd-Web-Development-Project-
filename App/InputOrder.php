<?php
	session_start();
	include_once("../Data/Orders_access.php");
	include_once("../Data/business_item_access.php");
	
	
	$order=getlatestOrderId();
	$datetime= date("Y/m/d")." ".date("h:i:sa");

	
	if($order!=null){
		$orderid=$order['orderid']+1;
	}else{
		$orderid=1000;
	}
	foreach ($_GET as $key => $value) {
		if($key!="bname" && $key!="total" && $value!=0){
			insertOrder($_SESSION['user']['uname'],$_GET['bname'],$key,$value,$orderid,$datetime,"Unapproved",$_GET['total']);
			
		}
	}
	
	header("location: Order_History.php");
	
?>
