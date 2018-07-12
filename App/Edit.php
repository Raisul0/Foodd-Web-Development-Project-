<?php	
		session_start();
			echo $_SESSION['user']['uname'];
			var_dump($GLOBALS);
			
			/* echo $_GET['email'];
			echo $_GET['mblno'];
			echo $_GET['add']; */
		
		
		if(isset($_GET['uname'])){
			
			
			
			
			/* include_once("../Data/user_access.php");
			
			$result=updateUser($_SESSION['user']['uname'],$_GET['name'],$_GET['email'],$_GET['mblno'],$_GET['add']);
					
			if($result!=Null){
				$_SESSION['user']=$result;
				header("location: User_Home.php");
			}else{
				header("location: User_Home.php");
			} */
		}
		
?>