<?php
	include("Base_Top_admin.php");
?>
    
	<div id="rating_details_1">
	Top Five(5)Delivary Boy :
	<div id="ratng_aline">
	Name(Rating)
	</div>
	</div>
	
	<div id="rating_details_2">
	
	<?php

include_once("../Data/dboy_access.php");

    $result=topFive();
			
	$total=count($result);
			if($total==0){echo"No Delivary boy for rating !";}
        else{
	if($total >=5){
		
	echo '<div class="dboydlt"><ul>';
	for($i=0;$i<5;$i++){
		
	echo '<div class="addbclass"><li>'.$result[$i]['uname'].'('.$result[$i]['currentrating'].')</div><a id="underline" href="bonus_add.php?uname='.$result[$i]['uname'].'">Add Bonus(100Tk)</a></li></br></br>';
	
	}
	echo " </div></ul>";
	}
	if($total <5)
	{
	echo '<div id="dboydlt"><ul>';
	for($i=0;$i<$total;$i++){
		
	echo '<div class="addbclass"><li>'.$result[$i]['uname'].'('.$result[$i]['currentrating'].')</div><a id="underline"  href="bonus_add.php?uname='.$result[$i]['uname'].'">Add Bonus(100Tk)</a></li></br></br>';
	
	}
	echo " </div></ul>";	
	}
	
		}
	
	
?>
	</div>
	
	<div id="rating_details_3">
	Bottom Five(5)Delivary Boy :
	</div>
	<div id="rating_details_4">
		<?php

include_once("../Data/dboy_access.php");

    $result=lastFive();
			
	$total=count($result);
			if($total==0){echo"No Delivary boy for rating !";}
        else{
	if($total >=5){
		echo '<div id="dboydlt"><ul>';
	for($i=0;$i<5;$i++){
		
	echo '<div class="addbclass"><li>'.$result[$i]['uname'].'('.$result[$i]['currentrating'].')</div><a id="underline" href="bonus_cut.php?uname='.$result[$i]['uname'].'">deducte Bonus(100Tk)</a></li></br></br>';
	
	}
	echo " </div></ul>";
	}
	if($total <5)
	{
	echo '<div id="dboydlt"><ul>';
	for($i=0;$i<$total;$i++){
		
	echo '<div class="addbclass"><li>'.$result[$i]['uname'].'('.$result[$i]['currentrating'].')</div><a id="underline" href="bonus_cut.php?uname='.$result[$i]['uname'].'">deducte Bonus(100Tk)</a></li></br></br>';
	
	}
	echo " </div></ul>";	
	}
		}
?>
	
	</div>

<?php
	include("Base_Bot_admin.php");
?>