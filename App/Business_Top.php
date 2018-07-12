<?php
	session_start();
	if(isset($_SESSION['user'])==false){
			header("location: login.php");
	}
	
		if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['type']!="business")
		{
				header("location: login.php");
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="BusinessDesign_Base.css">
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
				<a id="top"href="message_business.php"><span class="fa fa-envelope-o"></span></br></a>
					</div>
						
				</header>
			</div>
			
			<div id="sidebar">
				<ul id="ulside">
				<li><a href="Business_Home.php"><span class="fa fa-home"></span>Home</a></li>
				<li><a href="business_edit.php"><span class="fa fa-edit"></span>Edit Profile</a></li>
				<li><a href="Update_Menu.php"><span class="fa fa-cutlery"></span>Update Menu Item</a></li>
				 <li><a href="Add_Menu.php"><span class="fa fa-cutlery"></span>Add Menu Item</a></li>
				<li><a href="Delete_Menu.php"><span class="fa fa-trash-o"></span>Delete Menu Item</a></li>
				<li><a href="ShowMenu.php"><span class="fa fa-bars"></span>Show Menu</a></li>
				<li><a href="Place_Add.php"><span class="fa fa-buysellads"></span>Place Addvertisement</a></li>
				<li><a href="mybusiness_details.php"><span class="fa fa-history"></span>Restaurant History</a></li>
				<li><a href="logout.php"><span class="fa fa-sign-out"></span>log out</a></li>
					
				</ul>
			</div>
			
			<div id="mainbody">
				<div id="content">