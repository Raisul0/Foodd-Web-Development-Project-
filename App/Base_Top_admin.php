<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location: login.php");
		
		}
	if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['type']!="admin")
		{
				header("location: login.php");
		}
	}
?>

<html>
	<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="AdminDesign.css">
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
				<a id="top"href="mess_admin.php"><span class="fa fa-envelope-o"></span></br></a>
					</div>
						
				</header>
			</div>
			
			<div id="sidebar">
				<ul id="ulside">
		     		<li><a href="admin_search.php"><span class="fa fa-search"></span>Search Bar</a></li>
					<li><a href="Admin_Home.php"><span class="fa fa-home"></span>Home</a></li>
					<li><a href="admin_edit.php"><span class="fa fa-edit"></span>Edit Profile</a></li>
					<li><a href="Rating_details.php"><span class="fa fa-star-o"></span>Rating Details</a></li>
					<li><a href="administrative_home.php"><span class="fa fa-users"></span>Administration</a></li>
					<li><a href="sponsor.php"><span class="fa fa-buysellads"></span>Sponsors</a></li>
					<li><a href="Account.php"><span class="fa fa-dollar"></span>Accounts</a></li>
					<li><a href="logout.php"><span class="fa fa-sign-out"></span>Log Out</a></li>
				</ul>
			</div>
			
			<div id="mainbody">
				<div id="content">
			