 <script>
 function f(){  
          var idTextBox = document.getElementsByName("name")[0];
          
          var req = new XMLHttpRequest();
          req.open("GET", "../data/response.php?name="+idTextBox.value, false);
          req.send();
          
          var divObj = document.getElementById("sponsor_msg");
          divObj.innerHTML = req.responseText;	  
      }
	   function myFunction() {
        var email;

        email = document.getElementById("texturl").value;

            var reg =  /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
		  var divObj5 = document.getElementById("sponsor_msg1");

            if (reg.test(texturl.value) == false) 
            {
				divObj5.innerHTML ="Invalid url :"+ email;
               
                return false;
            } else{
            divObj5.innerHTML ="";
            }

       return true;
    }
	  </script>
<?php
	include("sponsor_top.php");
?>	
<div id="sponsor_msg"></div>
<div id="sponsor_msg1"></div>

	
	<form method="post" align="center" enctype="multipart/form-data" >
				<table align="center" border='0' color="red" cellpadding='20'cellspacing='0'>
					<thead>
						<tr>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> User Name </td>
							<td> : </td>
							<td><input name="name" required onkeyup="f()"/></br></td>
						</tr>
						
						<tr>
							<td>HTTP Address(Full)</td>
							<td>:</td>
							<td><input name="baddress" required id="texturl" value="http://www."onmouseleave="myFunction()" /></br></td>
						</tr>
						<tr>
							<td>Sponsor Cost</td>
							<td>:</td>
							<td><input name="scost" required /></br></td>
							<td>Tk</td>
						</tr>
						<tr>
							<td>Sponsor Logo</td>
							<td>:</td>
							<td ><input type="File" name="blogo" accept="image/*" required> </td>
					</tbody>
					<thead>
						<tr>
							
							<th colspan="3" ><input type="submit" class="regbut" value="Submit"/></th>
							
						</tr>
					</thead>
						
					
				</table>
		</form>
		

	
<?php
	include("sponsor_bottom.php");
?>	

<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		include_once("../Data/sponsor_access.php");
	    include_once("../Data/account_access.php");
		$name=$_REQUEST['name'];
		$baddress=$_REQUEST['baddress'];
		$flag=0;
	if(!preg_match('/[^a-zA-z_]/',$name)){
			$result=search_name($name);
			
			if($result==null){
			}else{
				echo " <ol> <li>Username already in use </li></br>";
				$flag=1;
			}
			
		}else{
			echo " <li>Invalid Characters in UserName</li> </br>";
			$flag=1;
		}
		
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$baddress)) {
            $flag=1;
		}
		if($flag!=1){
			
			$name=$_REQUEST['name'];
			$address=$_REQUEST['baddress'];
			$logo=$_FILES['blogo']['name'];
		    $scost=$_REQUEST['scost'];
			$date_sp=date("Y/m/d");
			$expenses_name="Sponsor_".$_REQUEST['name'];
			
//$itempic=$_FILES['itempic']['name'];
			$target = "../Image/sponsor/".basename($_FILES['blogo']['name']);
						
			if (move_uploaded_file($_FILES['blogo']['tmp_name'],$target)) {
				//echo "Image uploaded successfully";
			}else{
				//echo "Failed to upload image";
			}
			if(addsponsor($name,$address,$logo,$scost,$date_sp)& addincome($expenses_name,$scost,$date_sp)){
				echo "Insert Successfull";
				header("location: sponsor.php");
			}else{
				echo "Server issue's try again later";
			}
		}else{
			  echo " <ul> <li>Fix all the Problems And Try Again !! </li></ul>  "; 
		}	
	}		
?>