
<?php
   include_once("../Data/user_access.php");
		if(isset($_GET['uname'])){
        $uname = $_GET['uname'];								
		$result=searchUser($uname);
		
		if($result==null){
			
			}else{$flag=1;
				echo "*Yes this an valid Username";
			}
			     
    }
	
	if(isset($_GET['name'])){
        $name = $_GET['name'];
  include_once("../Data/sponsor_access.php");		
		$result=search_name($name);
		
		if($result==null){
			
			}else{$flag=1;
				echo "*Yes this an valid Username";
			}
			     
    }
	
   
?>