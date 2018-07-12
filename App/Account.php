<?php
	include("account_top.php");
?>	
<div id="expenses_div ">
	<p><b>Accounts Details:</b></p>
<?php

	include_once("../Data/account_access.php");
		$result=extotalcost();	
		$sum=0;
		$total=count($result);
			if($total==0){echo"No Pending Orders for Approval !";}
        else{
		 
	
		   for($i=0;$i<$total;$i++){
		
	       $sum+=$result[$i]['cost'];	
	       }
		}

	  if($sum!=0){	  
	echo '<div class="DivPlaceOrderac"><ul>';
		
	echo "<div class='div_expe'>Total Expenses :$sum TK</div>"; echo'<a href="show_allexpenses.php">Show Details</a></li></br></br>';
	
	
	echo " </div></ul>";
	  }
	
	////
		$result=incometotalcost();	
		 $sum1=0;
	      $total=count($result);
			if($total==0){echo"No Pending Orders for Approval !";}
        else{
		   for($i=0;$i<$total;$i++){
		
	       $sum1+=$result[$i]['income_cost'];	
	       }
		}
		if($sum1!=0){	  
	echo '<div class="DivPlaceOrderac"><ul>';
		
	echo "<div class='div_expe'>Total Income :$sum1 TK</div>"; echo'<a href="showallincome.php">Show Details</a></li></br></br>';
	
	
	echo " </div></ul>";
		}
	////
	
		
		  $profit=$sum1-$sum;
		  if($profit>=0){
	echo '<div class="DivPlaceOrderacd"><ul>';
		
	echo "<div class='div_expe'><b>Total Profit :$profit TK</b></div>"; 
	
	
	echo " </div></ul>";
		  }
		  else{
	echo '<div class="DivPlaceOrderacdl"><ul>';
		
	echo "<div class='div_expe'><b>Total Profit :$profit TK</b></div>"; 
	
	
	echo " </div></ul>";
		  }
?>
	 
	</div>
		
<?php
	include("account_bottom.php");
?>	