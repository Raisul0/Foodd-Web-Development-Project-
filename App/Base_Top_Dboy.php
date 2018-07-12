<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location: login.php");
	}
		if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['type']!="dboy")
		{
				header("location: login.php");
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="AdminDesign.css">
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
				<a id="top"href="message_dboy.php"><span class="fa fa-envelope-o"></span></br></a>
					</div>
						
				</header>
			</div>
			
			<div id="sidebar">
				<ul id="ulside">
				<li><a href="Dboy_Home.php"><span class="fa fa-home"></span>Home</a></li>
					<li><a href="Dboy_Edit.php"><span class="fa fa-edit"></span>Edit Profile</a></li>
					<li><a href="Dboy_details.php"><span class="fa fa-history"></span>About My Order</a></li>
					<li><a href="logout.php"><span class="fa fa-sign-out"></span>log out</a></li>
					
				</ul>
			</div>
			
			<div id="mainbody">
				<div id="content">
			