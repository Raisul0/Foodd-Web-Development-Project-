<script> 
 function f(){  
          var idTextBox = document.getElementsByName("uname")[0];
          
          var req = new XMLHttpRequest();
          req.open("GET", "message.php?uname="+idTextBox.value, false);
          req.send();
          
          var divObj = document.getElementById("msg5");
          divObj.innerHTML = req.responseText;
		  
      }
</script> 
<?php
	include("Base_Top_admin.php");
	
?>

	<div class="messageadmin" >
		<!DOCTYPE html>
	<html>
<style>input[type=text], select {
    width: 350px;
    padding: 20px 12px;
	margin-left:9px;
    margin: -20px 40;
    display: inline-block;
    border: 1px solid #808B96;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=text1], select {
    width: 48%;
    padding: 15px 12px;
	margin-left:20px;
    margin: 10px 40;
    display: inline-block;
    border: 1px solid #808B96;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: #2e6da4;
    color: white;
    padding: 14px 20px;
    margin: 25px 0;
    border: #204d74;
    border-radius: 4px;
    cursor: pointer;
}
</style>
	<head>
		
	</head>
		<body>
		<div id="msg5"></div>

		              <form method="post" >
						</br></br>Reply Message:<input type="text" name="msg" placeholder="Message"></br></br>
						</br><input type="submit" value="Send">
						
                      </form>
	</body>	
	</div>
	
	
	<?php
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		include_once("../Data/user_access.php");
		include_once("../Data/message_access.php");
		
				
					if($_REQUEST['msg']!=NULL){
			$uname=$_SESSION['user']['uname'];
			$msg="Reply of your msg : ".$_REQUEST['msg'];
			$fromtype="admin";
			$totype=$_GET['fromtype'];
			$date= date("Y/m/d")." ".date("h:i:sa");
			
			
			if(addmsgfromadmin($msg,$uname,$fromtype,$totype,$date)){
				
					header("location:mess_admin.php");

			}else{
				echo "Server issue's try again later";
			}
			}else{echo " <ol> <li>Please Enter your message</li></br>";}
			
			
		
	}
		?>
<?php
	include("Base_Bot_admin.php");
?>