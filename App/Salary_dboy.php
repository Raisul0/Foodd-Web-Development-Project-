<?php
	include("account_top.php");
?>	
<?php
include_once("../Data/dboy_access.php");
    $result=show_dboy();
			
	$total=count($result);
     if($total!=0){
	for($i=0;$i<$total;$i++){
		
	echo '<div class="DivPlaceOrderdboy" >
							<div class="divorderimagecontainer">
								<b>Name:</b>'.$result[$i]["uname"].'</br>
							</div>
							<div class="divordertext1" >
								
								<a id="underline" href="showsalary_dboy.php?uname='.$result[$i]['uname'].'&totalsalary='.$result[$i]['totalsalary'].'&date_salpaid='.$result[$i]['date_salpaid'].'&totalsal_paid='.$result[$i]['totalsal_paid'].'"><input type="button" value="Salary Paid"class="passbut" style="margin-left:290px;"/></a>

							</div>
							<div class="divordertext2" >
								
							    <a id="underline" href="updatesalary_dboy.php?uname='.$result[$i]['uname'].'&basicsalary='.$result[$i]['totalsalary'].'&currentbonus='.$result[$i]['currentbonus'].'&totalsal_paid='.$result[$i]['totalsal_paid'].'"><input type="button" value="Salary update"class="regbut" style="margin-left:300px;"/></a>

							</div>
					  </div>';
	}
}
else
{
	echo '<div id="dboydlt"><ul>';
	echo"Nothig for Update";
	echo " </div></ul>";
}
?>
		
<?php
	include("account_bottom.php");
?>	
