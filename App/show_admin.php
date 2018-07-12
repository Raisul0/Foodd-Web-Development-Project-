<?php

    include_once("../Data/admin_access.php");
     $uname=$_REQUEST['uname'];
    deleteadmin($uname);
	header("location: DeleteAdmin.php");

?>