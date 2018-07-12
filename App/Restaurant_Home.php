<?php
	include("Base_Top.php");
?>	
<script>
		var total=150;
		var orderitem=[];
		var count=0;
	function addtoCart(iname,price){
		var showTotal = document.getElementById("showtotal");
		var divObj = document.getElementById("selectedItem");
		var itemindex =	divObj.innerHTML.indexOf(iname);
		var check=itemindex+iname.length;
		total+=Number(price);
		showTotal.innerHTML="<hr/><b>Total+Charge :</b>"+total;
		if (itemindex <0){
			divObj.innerHTML+=iname+" x1-"+price+"\n";
			
			var iteminfo={name:iname,number:1};
			orderitem[count]=iteminfo;
			count++;
			
		}else{
			
			
			var quantity =  divObj.innerHTML.charAt(check+2);
			var optional= divObj.innerHTML.charAt(check+3);
			var item;
			var newquantity;
			var p;
			if(optional>="0" && optional<="9"){
				newquantity = Number(quantity+optional)+1;
				
				p= divObj.innerHTML.substring(check+5,check+8);
				
				
				if(divObj.innerHTML.charAt(check+8)>="0" && divObj.innerHTML.charAt(check+8)<="9"){
				 p= divObj.innerHTML.substring(check+5,check+9);
				}else{
					
				}
				item=iname+" x"+quantity+optional+"-"+p;
				
				
			}else{

				newquantity = Number(quantity)+1;
				p= divObj.innerHTML.substring(check+4,check+7);
				if(divObj.innerHTML.charAt(check+7)>="0" && divObj.innerHTML.charAt(check+7)<="9"){
				 p= divObj.innerHTML.substring(check+4,check+8);
				}else{
					
				}
				item=iname+" x"+quantity+"-"+p;
			}
			
			for(var i=0;i<count;i++){
				if(orderitem[i].name==iname){
					orderitem[i].number+=1;
				}
			}
			
			var newp=Number(p)+Number(price);
			var newitem= iname+" x"+newquantity.toString()+"-"+newp;
			divObj.innerHTML=divObj.innerHTML.replace(item,newitem);
			

			
		}
	}
	
	function removefromCart(iname,price){
		var showTotal = document.getElementById("showtotal");
		var divObj = document.getElementById("selectedItem");
		var itemindex =	divObj.innerHTML.indexOf(iname);
		var check=itemindex+iname.length;
		
		
		if (itemindex <0){
			
		}else{
			
			var quantity =  divObj.innerHTML.charAt(check+2);
			var optional= divObj.innerHTML.charAt(check+3);
			var item;
			var newquantity;
			var p;
			
			if(optional>="0" && optional<="9"){
				newquantity = Number(quantity+optional)-1;
				
				p= divObj.innerHTML.substring(check+5,check+8);
				
				
				if(divObj.innerHTML.charAt(check+8)>="0" && divObj.innerHTML.charAt(check+8)<="9"){
				 p= divObj.innerHTML.substring(check+5,check+9);
				}else{
					
				}
				item=iname+" x"+quantity+optional+"-"+p;
				
				
			}else{

				newquantity = Number(quantity)-1;
				p= divObj.innerHTML.substring(check+4,check+7);
				if(divObj.innerHTML.charAt(check+7)>="0" && divObj.innerHTML.charAt(check+7)<="9"){
				 p= divObj.innerHTML.substring(check+4,check+8);
				}else{
					
				}
				item=iname+" x"+quantity+"-"+p;
			}
			
			if(newquantity!=0){
				var newp=Number(p)-Number(price);
				var newitem= iname+" x"+newquantity.toString()+"-"+newp;
				divObj.innerHTML=divObj.innerHTML.replace(item,newitem);
				
				for(var i=0;i<count;i++){
					if(orderitem[i].name==iname){
						orderitem[i].number-=1;
					}
				}	
				
				
			}else{
				divObj.innerHTML=divObj.innerHTML.replace(item,"");
				
				for(var j=0; j<count ;j++){
					if(orderitem[j].name==iname){
						orderitem[j].number=0;
					}
				}
				
				
			}
			
			total-=price;
			if(total==150){
						showTotal.innerHTML="<hr/><b>Total+Charge :</b>"+0;
	
			}
			else{
			showTotal.innerHTML="<hr/><b>Total+Charge :</b>"+total;
			}
		}
		
		
	}
	
	function submititems(){
		
		var keyvalue="";
		for(i=0;i<count;i++){
			if(i==count-1){
				keyvalue+=orderitem[i].name+"="+orderitem[i].number;
			}else{
				keyvalue+=orderitem[i].name+"="+orderitem[i].number+"&";
			}
		}
		

		window.location.href = "http://127.0.0.1/foodd_01/App/InputOrder.php?total="+total+"&bname=<?=$_GET['bname'];?>&"+keyvalue;
		
	}

</script>



	<div id="restaurantname"><b><?=$_GET['bname'];?></b></div>

<?php 
		include_once("../Data/business_item_access.php");
			$result=allItems($_GET['bname']);
			
			$total=count($result);
			
			for($i=0;$i<$total;$i++){
				echo '<div class="menuitem">
							<div class="menuimagecontainer">
								<div id="divimage">
									<img src="../Image/Items/'.$result[$i]["itempic"].'" alt="Error">
								</div>
							</div>
							<div class="menutext" >
								<b>Item Name:</b>'.$result[$i]["iname"].'</br>
								<b>Price:</b>'.$result[$i]["price"].'Tk</br>
								<input type="button" class="cartbu" value="+" style="margin-left:10px;font-weight: 700;-webkit-border-radius:5px;" onclick="addtoCart(\''.$result[$i]["iname"].'\',\''.$result[$i]["price"].'\')"/><input type="button"  class="cartbu" value="-" style="margin-left:10px;font-weight: 700;padding-left:5px;padding-left:10px;-webkit-border-radius:5px;" onclick="removefromCart(\''.$result[$i]["iname"].'\',\''.$result[$i]["price"].'\')"/>
							</div>
					  </div>';
			}

?>
	
	<div id="cart">
			<div id="selectedItem">

			</div>
		<div id="showtotal">

	
		</div>
		<div id="orderSubmitbutton">
			<input type="button" value="check out" class="checkout" onclick="submititems()"/>
		</div>
	</div>
	
	
	

<?php
	include("Base_Bot.php");
?>

