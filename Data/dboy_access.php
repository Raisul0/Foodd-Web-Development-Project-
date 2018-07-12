<?php
	if(require_once("../Data/db.php")){
	
		function searchUser_dboy($uname){
			global $conn;
			$query="SELECT * FROM dboy_info WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			return mysqli_fetch_assoc($result);
		}
		
		function addUser($name,$uname,$pass,$email,$mblno,$add,$type){
			
			global $conn;

			$query="INSERT INTO user(name, uname, pass, email, mblno, address,type) VALUES ('$name','$uname','$pass','$email','$mblno','$add','$type')";
		 	$result=mysqli_query($conn,$query);
			
			
			return $result;
		}
		
		function searchUser1($uname){
			global $conn;
			$query="SELECT * FROM user WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return mysqli_fetch_assoc($result);
		}
		function adddboy_info($uname,$basicsalary,$currentrating,$currentbonus,$totalsalary,$stage){
			
			global $conn;

			$query="INSERT INTO dboy_info(uname, basicsalary, currentrating, currentbonus, totalsalary,stage) VALUES ('$uname','$basicsalary','$currentrating','$currentbonus','$totalsalary','$stage')";
		 	$result=mysqli_query($conn,$query);			
			return $result;
		}
		function updateuser($uname,$name,$email,$mblno,$add){
			global $conn;
			$query="UPDATE user SET name='$name', email='$email', mblno='$mblno', address='$add' WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return mysqli_fetch_assoc($result);
		}
		
		function show_dboy()
		{
			global $conn;
			$query="SELECT * FROM dboy_info ";
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$dboy[$i]=$row;
			}
			return $dboy;
			}
		}
		function deletedboy_dboyinfo($uname)
		{
			global $conn;
			$query="DELETE FROM dboy_info WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			return 1;
		}
		
		function deletedboy_user($uname)
		{
			global $conn;
			$query="DELETE FROM user WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
		     return 1;
		}
		function topFive()
		{
			global $conn;
			$query="SELECT * FROM dboy_info ORDER BY currentrating DESC";
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$dboy[$i]=$row;
			}
			return $dboy;
			}
		}
		function lastFive()
		{
			global $conn;
			$query="SELECT * FROM dboy_info ORDER BY currentrating";
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$dboy[$i]=$row;
			}
			return $dboy;
			}
		}
		
		function bounsadd($currentbonus,$uname)
		{
			global $conn;
			$query="UPDATE dboy_info SET currentbonus ='$currentbonus' where uname='$uname'";
			$result=mysqli_query($conn,$query);
			return 1;
		}
		function updatetotal($totalsalary,$uname)
		{
			global $conn;
			$query="UPDATE dboy_info SET totalsalary ='$totalsalary' where uname='$uname'";
			$result=mysqli_query($conn,$query);
			return 1;
		}
		
		function count_available_dboy(){
			global $conn;
			$query="SELECT * FROM dboy_info WHERE stage='available'";
			$result=mysqli_query($conn,$query);
			$countboys;
			
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$countboys[$i]=$row;
			}
			return $countboys;
		}
		function availabledboy(){
			global $conn;
			$query="SELECT * FROM dboy_info WHERE stage='available'";
		 	$result=mysqli_query($conn,$query);
			$cdboy;
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$cdboy[$i]=$row;
			}
			
			return $cdboy;
		}
		function updatedboyall($uname,$name,$email,$mblno,$add){
			global $conn;
			$query="UPDATE user SET name='$name', email='$email', mblno='$mblno', address='$add' WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return searchUser1($uname);
		
		}
		
		function updaterating($currentrating,$uname)
		{
			global $conn;
			$query="UPDATE dboy_info SET currentrating ='$currentrating' where uname='$uname'";
			$result=mysqli_query($conn,$query);
			return 1;
		}
		
		function updatesalary($basicsalary,$totalsalary,$uname)
		{
			global $conn;
			$query="UPDATE dboy_info SET basicsalary ='$basicsalary',totalsalary ='$totalsalary' where uname='$uname'";
			$result=mysqli_query($conn,$query);
			return 1;
		}
		
	}
	
?>