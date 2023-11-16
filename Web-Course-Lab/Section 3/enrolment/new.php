 <?php 	@session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
 			
	if(isset($_POST['submit'])){
		include('db.php');
		$name = addslashes($_POST['name']);
		$fname = addslashes($_POST['fname']);
		$mname = addslashes($_POST['mname']);
		$gender = $_POST['gender'];
		$blood = $_POST['blood'];
		$bdate = addslashes($_POST['bdate']);
		$religion = $_POST['religion'];
		$address = addslashes($_POST['address']);
		$dept = addslashes($_POST['dept']);
		
		// checking empty fields
    if(empty($name) || empty($gender) || empty($dept)) {                
        if(empty($name)) {
            echo "<font color='white'>Name field is empty.</font><br/>";
        }
        
        if(empty($gender)) {
            echo "<font color='white'>Select Gender</font><br/>";
        }
        
        if(empty($dept)) {
            echo "<font color='white'>Department field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back(-1);'>Go Back</a>";
    } else { 
		
	//	if($name && $gender){
	 $result =mysqli_query($mysqli,"INSERT INTO `employee` (`name`, `fname`, `mname`, `gender`, `bdate`, `blood`, `religion`, `dept`, `address`) VALUES ('$name','$fname','$mname', '$gender', '$bdate', '$blood', '$religion','$dept', '$address');") or die(mysql_error());
		echo "<font color='white'>Data added successfully.";
        
    }
}
?>
<?php include('header.php'); ?>
<center>
	<h2> Student Entry Form </h2>
	<div style="width:650px; background-color:#E5E5E5; padding: 10px;">
		<form method="post" name="form" action="";">
			<table cellspacing="0" cellpadding="5" width="100%">
					
					<tr>
						<td width="190px"><b>Name:</b></td>
						<td><input type="text" name="name" size="40" value="" /></td>
					</tr>
					
					<tr>
						<td><b>Father's Name:</b></td>
						<td><input type="text" name="fname" size="40" value="" /></td>
					</tr>
					
					<tr>
						<td><b>Mother's Name:</b></td>
						<td><input type="text" name="mname" size="40" value="" /></td>
					</tr>
					
					<tr>
						<td><b>Birth Date:</b></td>
						<td><input type="text" name="bdate" size="10" value="" /> (YYYY-MM-DD)</td>
					</tr>
					
					<tr>
						<td><b>Blood:</b></td>
						<td>
							<input type="text" name="blood" size="8" value="" />
						</td>
					</tr>
					
					<tr>
						<td><b>Gender:</b></td>
						<td>
							<label><input type="radio" name="gender" value="Male" />Male</label>
							<label><input type="radio" name="gender" value="Female" />Female</label>
						</td>
					</tr>
					
					<tr>
						<td><b>Religion:</b></td>
						<td>
							<input type="text" name="religion" size="40" value="" />
						</td>
					</tr>
					
					<tr>
						<td><b>Department:</b></td>
						<td>
							<input type="text" name="dept" size="40" value="" />
						</td>
					</tr>
					
					<tr>
						<td><b>Address:</b></td>
						<td><textarea name="address" cols="30" rows="2"></textarea></td>
					</tr>
					
		  </table>
				<input type="submit" name="submit" value="Submit" />
		</form>
	</div>
</center>

<?php include('footer.php'); ?>