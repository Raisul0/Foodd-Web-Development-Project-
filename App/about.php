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
		<p><h4>FooDD is one of the largest foodservice distributors. With $2 billion in annual revenue, FooDD was the 10th largest private company in Bangladesh until its recent IPO.</h3></p>
				   <p><b>Headquarters:</b> Bonani, Dhaka,Bangladesh</p>
					<p><b>CEO: </b>Pietro Satriano (Jul 13, 2015–)</p>
				<p><b>	   	  Technical support:</b> +8801624961340</p>
				<p><b>		  Revenue:</b> 2.92 billion BDT (2016)</p>
                  <p><b>        Traded as:</b> NYSE: USFD</p>
                   <p><b>       Parent organization:</b> FooDD Holding Corp.</p>
				   <p><b>Sponsors:</b></p> 
				   <div id="Sponsors" >
			<?php	include_once("../Data/sponsor_access.php");
			
			
			$result=allsponsor();
			
			$total=count($result);
			
			for($i=0;$i<$total;$i++){
				echo '<div class="aboutSp" >
						<a href="'.$result[$i]["address"].'" class="fill-div" />
							<div class="aboutimage">
								<img src="../Image/sponsor/'.$result[$i]["logo"].'" alt="Error" style="width:100px;height:100px;">
							</div>
							
						</a>
					  </div>';
			} ?> </div>

		</div>
			<div id="footbreg">
				<footer>
					<div color="red">
							© Copyright 2017 FooDD is a registered trademark . FooDD Bangladesh !!
							</br> <a id="ab"href="http://127.0.0.1/foodd_01/app/login.php">Go to login</a>.<a href="http://127.0.0.1/foodd_01/app/reg.php">Create New Account ?</a>
					</div>
				</footer>
			</div>
		</div>
			
		
		
	</body>
	</center>
</html>