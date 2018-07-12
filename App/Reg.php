<script>
      function f(){  
          var idTextBox = document.getElementsByName("uname")[0];
          
          var req = new XMLHttpRequest();
          req.open("GET", "../data/response.php?uname="+idTextBox.value, false);
          req.send();
          
          var divObj = document.getElementById("msg1");
          divObj.innerHTML = req.responseText;
		  
      }
	  
	  function f1(){
		  
		  var divObj1 = document.getElementById("msg");
		            var idTextBox1 = document.getElementsByName("cpass")[0];
					 var idTextBox2 = document.getElementsByName("pass")[0];
					 if(idTextBox1.value==idTextBox2.value)
            			   divObj1.innerHTML = "";

          else 
			  divObj1.innerHTML = "password didn't match";

	  }
	  
	  function myFunction() {
        var email;

        email = document.getElementById("textEmail").value;

            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		  var divObj5 = document.getElementById("msg2");

            if (reg.test(textEmail.value) == false) 
            {
				divObj5.innerHTML ="Invalid EMail :"+ email;
               
                return false;
            } else{
            divObj5.innerHTML ="";
            }

       return true;
    }
	
	function myFunctionmb() {
        var email;

             email = document.getElementById("textmb").value;
		    var a=email.length;
            var reg = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
		    var divObj5 = document.getElementById("msg3");
			if(a==11||a==14){
            if (reg.test(textmb.value) == false) 
            {
				divObj5.innerHTML ="Invalid Number :"+ email;
              
                return false;
            } else{
            divObj5.innerHTML ="";
            }
			}
			else{
				divObj5.innerHTML ="Digit must be 11 or 14";
			}
       return true;
    }
	  
	  
</script

<html>
	<head>
		<link rel="stylesheet" href="AdminDesign.css">
		<title>FooDD</title>
	</head>

<div id="msg1"></div>
<div id="msg"></div>
<div id="msg2"></div>
<div id="msg3"></div>
	<body >
		<div id="wholeBodybreg">
			<div id="topHeadbreg">
				<header>
					<div id="logo">
			 <img src="h.png">
			 </div>
					<h1 id="textadmin">Welcome to FooDD</h1>
					<div color="red">
						<b id="wrning"> Please Register Your Account With Orginal address</b>
			</div>
				</header>
			</div>
	
		<form method="POST" align="center" >
				<table align="center" border='2' color="red" cellpadding='25'cellspacing='0'>
					<thead>
					</thead>
					<tbody>
						<tr>
							<td> Name </td>
							<td> : </td>
							<td><input name="name" placeholder="At least Two word..." /></br></td>
							
						</tr>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td><input name="uname" placeholder="Unique User name..." required onkeyup="f()" /></br></td>
							   
						</tr>
						
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input name="pass" placeholder="8 or more characters.."type="password" required /></br></td>
						</tr>
						<tr>
							<td>Confirm Password</td>
							<td>:</td>
							<td><input name="cpass" type="password" required onmouseleave="f1()"/></br></td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><input name="email" placeholder="Valid email id.." id="textEmail" onmouseleave="myFunction()" required /></br></td>
						</tr>
						<tr>
							<td>Mobile No</td>
							<td>:</td>
							<td><input name="mbl" id="textmb"placeholder="valid mobile No.." onmouseleave="myFunctionmb()"required /></br></td>
						</tr>
						<tr>
							<td>Address</td>
							<td>:</td>
							<td><input placeholder="Valid address..."name="add" required/></br></td>
						</tr>
					</tbody>
					<thead>
						<tr>
							<th colspan="2" ><a id="underline" href="http://127.0.0.1/foodd_01/App/login.php"><input name="cancle" class="regbut"type="button" value="Cancle"/></a></th>
							<th colspan="3" ><input type="submit"class="regbut" value="Submit"/></th>
							
						</tr>
					</thead>
						
					
				</table>
		</form>
		
			<div id="footbreg">
				<footer>
					<div color="red">
							© Copyright 2017 fÖÖdd is a registered trademark . fÖÖdd Bangladesh !!
							</br> <a id="ab"href="http://127.0.0.1/foodd_01/app/about.php">About Us</a>

					</div>
				</footer>
			</div>
		</div>
		
		
	</body>
</html>

<?php
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		include_once("../Data/user_access.php");
		
		$flag=0;
		
		$uname=$_REQUEST['uname'];
		
		if(str_word_count($_REQUEST['name']<2)){
			echo "Name must contain 2 words";
			$flag=1;
		}
		
		if(!preg_match('/[^a-zA-z_]/',$uname)){
			
			
			
			$result=searchUser($uname);
			
			if($result==null){
			}else{
				echo " <ol> <li>Username already in use </li></br>";
				$flag=1;
			}
			
		}else{
			echo " <li>Invalid Characters in UserName</li> </br>";
			$flag=1;
		}
		
		if(filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
		   
        }else
		{
			 echo "<li>Invalid email format</li> </br>";
			 $flag=1;
		}
		
		if(strlen($_REQUEST['pass'])>=8){
			
			if($_REQUEST['pass']==$_REQUEST['cpass'] ){
			}else{
				echo "<li>Password Didn't Match</li> </br>";
				$flag=1;
			}
		}else{
			echo "<li>Password Needs to be 8 Character long </li></br>";
			$flag=1;
		}
		
			
		
		  
		if(!preg_match('/[^0-9]/',$_REQUEST['mbl'])){
			}else{
				echo "<li>Invalid Characters in Mobile No </li> </br> </ol>";
				$flag=1;
			}
			
		if($flag!=1){
			$uname=$_REQUEST['uname'];
			$name=$_REQUEST['name'];
			$pass=base64_encode($_REQUEST['pass']);
			$email=$_REQUEST['email'];
			$mblno=$_REQUEST['mbl'];
			$add=$_REQUEST['add'];
			$type="customer";
			
			
			
			if(addUser($name,$uname,$pass,$email,$mblno,$add,$type)){
				echo '<script>
					alert("Insert Successfull");
					
					</script>';
			}else{
				echo "Server issue's try again later";
			}
		}else{
			  echo " <ul> <li>Fix all the Problems And Try Again !! </li></ul>  "; 
		}	
	}
 
?>