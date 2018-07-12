<?php
	include("Base_Top.php");
?>
	<div id="deleteacc">
		<div id="delinside">
			 Are you sure you want to Delete Your account ?</br>
			 <form method="post"><input type="button" value="No" onclick="cancleClick()"><input type="submit" value="Yes"></form>
		</div>
	</div>

<?php
	include("Base_Bot.php");
?>

<?php 
		if($_SERVER["REQUEST_METHOD"]=='POST'){
			
			include_once("../Data/user_access.php");
			$uname=$_SESSION['user']['uname'];
			
			$result=deleteUser($uname);
			
			if($result==true){
				header("location: logout.php");
			}else{
				echo "Server Issue";
			}
		
		
		}


?>

<script>
	
	function cancleClick(){
		window.location.href = "http://127.0.0.1/foodd_01/App/User_Home.php";
	}
</script>	