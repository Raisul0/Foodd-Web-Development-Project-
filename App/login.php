<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		
		$name=$_REQUEST['uname'];
	
		include_once("../Data/user_access.php");
		
		$result=searchUser($name);
				
			
			if(($_REQUEST['pass']==$result['pass'] )||base64_encode($_REQUEST['pass'])==$result['pass']){
				session_start();
				$_SESSION['user']=$result;
				if($_SESSION['user']['type']=="dboy")
				{
					header("location: Dboy_Home.php");
				}
				else if($_SESSION['user']['type']=="admin"){
					header("location: Admin_home.php");
				}
				else if($_SESSION['user']['type']=="customer"){
					header("location: User_Home.php");
				}
				else if($_SESSION['user']['type']=="business"){
					header("location: Business_Home.php");
				}
				else if($_SESSION['user']['type']=="c"){
					echo '<script>
					alert("Your Account is Blocked for some Reason");
					</script>';
				}
				else{
					echo "Invalid User Name or Password 1";
				   }
				
			}
			else{
				echo "Invalid User Name or Password";
			}
		
	}

?>
<html>
	<head>
		<link rel="stylesheet" href="AdminDesign.css">
		<title>FooDD</title>
	</head>
<center>
	<body >
		<div id="wholeBodybreg">
		    
			
			 <div id="topHeadbreg">
				<header>
				<div id="logo">
			 <img src="h.png">
			 </div>
					<h1 id="textadmin" >Welcome to FooDD</h1>
					<p ><b>online food delivery service </br> We Serve you !!</b></p>
								
				</header>
			</div>
	
		<div id="login">
		<form method="post">
		
			
			<table border='3' cellpadding='25'cellspacing='0'>
				<tr>
					<td><b>UserName: </b></td>
					<td><input type="text" name="uname" class="input_text" required/></td>
				</tr>
				<tr>
					<td><b>Password : </b></td>
					<td><input type="password" class="input_text" name="pass" required/></td>
				</tr>
				<tr>
					
					<th colspan='2'  ><input type="submit" class="regbut" value="Login"/> </th>
				</tr>
			</table>
			
			<a href="http://127.0.0.1/foodd_01/app/reg.php">Create New Account ?</a>
		</form>
		
		</div>
			<div id="footbreg">
				<footer>
					<div color="red">
							<b">© Copyright 2017 FooDD is a registered trademark . FooDD Bangladesh !!</b>
							</br> <a id="ab"href="http://127.0.0.1/foodd_01/app/about.php">About Us</a>
					</div>
				</footer>
			</div>
		</div>
			
		
		
	</body>
	</center>
</html>

