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
	include("Business_Top.php");
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
						</br></br>Message:<input type="text" name="msg" placeholder="Message"></br></br>
						</br><input type="submit" value="Send">
						
                      </form>
	</body>	
	</div>
	<div id="dBOY_order1">
	Message From Admin :
	</div>
	
	
<?php	
include_once("../Data/message_access.php");
			
			
			$result=searchmsg($_SESSION['user']['uname']);
			$total=count($result);
			if($total==0){echo"No msg";}
        else{
			
			for($i=0;$i<$total;$i++){
				echo '<div class="Divmessage" >
						
							<div class="divordertext" >
								<p><b>Message:</b>'.$result[$i]["msg"].'</p></br>
									<h6><b>From:</b>'.$result[$i]["fromtype"].'</br>
								<b>Date:</b>'.$result[$i]["date"].'</h6>
							</div>
					
					  </div>';
			}
			
		}	
			
?>
	
<?php
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		include_once("../Data/user_access.php");
		include_once("../Data/message_access.php");
		
		   
				
					if($_REQUEST['msg']!=NULL){
			$uname=$_SESSION['user']['uname'];
			$msg=$_REQUEST['msg'];
			$fromtype=$_SESSION['user']['uname'];
			$totype="admin";
			$date= date("Y/m/d")." ".date("h:i:sa");
			
			
			if(addmsgfromadmin($msg,$uname,$fromtype,$totype,$date)){
				echo '<script>
					alert("Message Send Successfully");
					
					</script>';
			}else{
				echo "Server issue's try again later";
			}
			}else{echo " <ol> <li>Please Enter your message</li></br>";}
			
			
		
	}
		?>
<?php
	include("Base_Bot.php");
?>