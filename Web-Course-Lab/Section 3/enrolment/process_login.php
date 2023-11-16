<?php
@session_start();
include ("db.php");

if(isset($_POST['submit'])){
    $u =	addslashes($_POST['username']);
     $p =	$_POST['password'];
	
	if($u && $p) {
		
		$query= mysqli_query($mysqli,"SELECT * FROM users WHERE username='$u' AND password='$p' "); 
		$row=mysqli_fetch_array($query);
		
		if($row){
			
			$_SESSION['uid'] = $row[0];
			$_SESSION['username'] = $row[1];
			header("Location: index.php?action=true");
		
		}else {
			header("Location: index.php?error=true");
		}
		
    }else {
		header("Location: index.php?error=true");
	}
}
header("Location: index.php");	 
?>