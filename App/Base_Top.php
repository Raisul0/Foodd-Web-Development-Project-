<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location: login.php");
	}
		if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['type']!="customer")
		{
				header("location: login.php");
		}
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="UserDesign_Base.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<title>FooDD</title>
	</head>

	<body >
		<div id="wholeBody">
			<div id="topHead">
				<header>
				<div id="logoadmin">
			 <img src="h.png">
			 </div>
					<p><h1 id="textadmin">Welcome <?=$_SESSION['user']['name']?></h1></p>
					<div id="divtop">	
				<a id="top"href="message_customer.php"><span class="fa fa-envelope-o"></span></br></a>
					</div>
						
				</header>
			</div>
			
			
			<div id="sidebar">
				<ul >
					<li><a href="User_search.php"><span class="fa fa-search"></span>Search Bar</a></li>
					<li><a href="User_Home.php"><span class="fa fa-home"></span>Profile</a></li>
					<li><a href="User_Edit.php"><span class="fa fa-edit"></span>Edit Profile</a></li>
					<li><a href="Place_Order.php"><span class="fa fa-shopping-cart"></span>Place Order</a></li>
					<li><a href="Order_History.php"><span class="fa fa-history"></span>Order History</a></li>
					<li><a href="logout.php"><span class="fa fa-sign-out"></span>log out</a></li>
				</ul>
			</div>
			
			<div id="mainbody">
				<div id="content">
			