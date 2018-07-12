<?php
	include("Base_Top_admin.php");
?>	
	
	
<!DOCTYPE html>
	<html>
<style>input[type=text], select {
    width: 100%;
    padding: 22px 20px;
    margin: -20px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
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
		              <form method="post" align="center">
							</br><input type="text" name="search" placeholder="Search......."><input type="submit" value="Search">
						
                      </form>
	</body>
	
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		
		include_once("../Data/user_access.php");
        if($_REQUEST['search']==Null){echo"<ul><li>Please Search,Your Search Should be a Name,username,email,address or a user type </li></ul>";}
		else{
		$search=$_REQUEST['search'];
        $result=searchalluser($search);
        $total=count($result);
			if($total==0){
				include_once("../Data/business_info_access.php");
				  $result=searchbusi($search);
					$total=count($result);
					if($total==0){echo"<ul><li>Your Search Should be a Name,username,email,address or a user type </li><li>Your Search Should be a Business name </li></ul>";}
					else{
				   
					for($i=0;$i<$total;$i++){
							echo '<div class="DivPlaceOrder" >
										<div class="divorderimagecontainer">
											<div id="divimage">
												<img src="../Image/Logos/'.$result[$i]["blogo"].'" alt="Error">
											</div>
										</div>
										<div class="divordertext" >
											<b>Name:</b>'.$result[$i]["bname"].'</br>											
											<b>Address:</b>'.$result[$i]["baddress"].'
										</div>
								  </div>';
						
						}
					}	
				}
        else{
        for($i=0;$i<$total;$i++){
					
		echo '<div class="searchadmindiv">
				<table>
					<tbody>
					<tr>
							<td><b>Name</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["name"].'</td>
						</tr>
						<tr>
							<td><b>user Name</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["uname"].'</td>
						</tr>
						<tr>
							<td><b>Mobile No</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["mblno"].'</td>
						</tr>	
						<tr>
							<td><b>Email</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["email"].'</td>
						</tr>	

						<tr>
							<td><b>Address</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["address"].'</td>
						</tr>
						<tr>
							<td><b>User Type</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["type"].'</td>
						</tr>						
					</tbody>
				</table>
				</a>
			</div>'
			
			;
			
     }

}
		}
}
?>
	

<?php
	include("Base_Bot_admin.php");
?>