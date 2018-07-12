<?php 
	session_start();
	
	if(isset($_SESSION['user'])==false){
			header("location: login.php");
	}
	
		if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['type']!="business")
		{
				header("location: login.php");
		}
	}
	
	include_once("../Data/business_item_access.php");
	
		$result=itemPrice($_SESSION['business']['bname'],$_REQUEST['iname']);
		
		header("location: Delete_Menu.php?itemprice='$result['price']'");
?>