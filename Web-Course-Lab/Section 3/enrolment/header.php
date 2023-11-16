<?php
@session_start();
if(isset($_SESSION['username']) && $_SESSION['username']){ 	$login = true;
} 

include('db.php');
?>
<html>
	<head>
		<title>Student Enrolment System</title>
		<meta content="Student,Enrolment" name="keyword">
		<meta content="Student Enrolment System" name="description">
		
	</head>
	<body bgcolor="green" style="">
		<center>
		<table width="950px" bgcolor="#E8E8E8">
			<tr class="header" bgcolor="#EEEEEE">
				<td  align="center">
					<br/>
					<h1>Student Enrolment System</h1>
					<?php if($login) { ?>
					<table class="menu" width="571px" cellpadding="5">
						<tr>
							<td><a href="index.php" title="Home">HOME</a></td>
							<td><a href="new.php" title="New Employee">NEW STUDENT </a></td>
							<td><a href="list.php" title="List of Employee">STUDENT LIST</a></td>
							<td><a href="search.php" title="Search Employee">SEARCH </a></td>
							<td><a href="logout.php" title="Log Out">LOGOUT</a></td>
						</tr>
					</table>
					<?php }else{  					
            			?>
				
					<table class="menu" width="213" cellpadding="5">
						<tr>
							<td width="197"><div align="center"><a href="login.php" title="Log In">LOGIN ADMIN</a></div></td>
						</tr>
					</table>
					<?php } ?>
				</td>
			</tr>
			
			<tr class="content" bgcolor="#FFFFFF">
				<td height="350px"  align="left" valign="top">
				<br/>