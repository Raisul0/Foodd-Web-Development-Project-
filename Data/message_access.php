<?php
	if(require_once("../Data/db.php")){
	
		function searchadminmsg()
		{
			global $conn;
			$query="SELECT * FROM msg where totype='admin' ORDER BY date DESC";
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$dboy[$i]=$row;
			}
			return $dboy;
			}
		}
		function searchmsg($uname)
		{
			global $conn;
			$query="SELECT * FROM msg where totype='$uname' OR totype='all' ORDER BY date DESC";
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$dboy[$i]=$row;
			}
			return $dboy;
			}
		}
		
		function addmsgfromadmin($msg,$uname,$fromtype,$totype,$date){
			
			global $conn;

			$query="INSERT INTO msg(msg, uname, fromtype, totype, date) VALUES ('$msg','$uname','$fromtype','$totype','$date')";
		 	$result=mysqli_query($conn,$query);
			
			
			return $result;
		}
	}
?>