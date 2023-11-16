<?php
@session_start();
if(isset($_SESSION['username'])){
	header("Location: index.php");
	        }
//}
$login = '';
include('header.php');
if(isset($_GET['error'])) echo "Username and Password not matched."; 
?>
<center>
		<h1 id="page-title">Administrator Login Form </h1>
		<div class="messages warning">
		<?php 
		//if(isset($_GET['error'])) echo "Username and Password not matched."; 
		?></div>
		<form method="post" action="process_login.php">
			<table width="400px">
				<tr>
					<td><b>Username:</b></td>
					<td><input type="text" name="username" /></td>
				</tr>
				<tr>
					<td><b>Password:</b></td>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Login" /></td>
				</tr>
			</table>
		</form>
	</center>
<?php

include('footer.php');
?>