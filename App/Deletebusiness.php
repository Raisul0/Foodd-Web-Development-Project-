<?php

include_once("../Data/business_info_access.php");
include_once("../Data/addvert_access.php");
include_once("business_item_access.php");
 $uname=$_REQUEST['uname'];
  $bname=$_REQUEST['bname'];
 deletebusiness($uname);
 deletebusinessadvar($uname);
	header("location: administrative_home.php");

?>