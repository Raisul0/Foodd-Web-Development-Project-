<?php

	include_once("../Data/business_item_access.php");
	$result=deleteItem($_GET['bname'],$_GET['iname']);
			
			if($result==true){
				header("location: Delete_Menu.php");
			}else{
				echo "Server issue";
			}
			
?>