<?php
$login = '';
$title = 'Home';
include('header.php');
?><br />
<center>
<h2 align="center" id="page-title">Welcome to Student Enrolment System.</h2>
<?php
	if($login){
		echo '<p>You are logged in as : '.$_SESSION['username'].'</p>';
	}else{
		echo '<p>Please Login</p>';
	}
?>
<?php
include('footer.php');
?>