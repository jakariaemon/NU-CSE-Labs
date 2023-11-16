<?php 
@session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
	//getting id of the data from list
	$id = $_GET['id'];
	if(!isset($_GET['id'])){
		header('Location: list.php?error=id');		
	}
	include('db.php');
	
	mysqli_query($mysqli,"DELETE FROM `employee` WHERE id=$id");
	
	header('Location: list.php?success=delete');
?>