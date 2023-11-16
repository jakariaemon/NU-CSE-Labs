<?php 
	@session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
	
	if(!isset($_GET['id'])){
		header('Location: list.php?error=id');
	}
	$id = $_GET['id'];
	
	include('db.php');
	
	$name = '';
	$fname = '';
	$mname = '';
	$gender = '';
	$blood = '';
	$bdate = '';
	$religion = '';
	$address = '';
	$position = '';
	
	$query = mysqli_query($mysqli,"SELECT * FROM `employee` WHERE `id` ='$id';");
	$row=mysqli_fetch_object($query);
	if(isset($row->id)){
		$name = $row->name;
		$fname = $row->fname;
		$mname = $row->mname;
		$gender = $row->gender;
		$blood = $row->blood;
		$bdate = $row->bdate;
		$dept = $row->dept;
		$religion = $row->religion;
		$address = $row->address;
	}else{
		header('Location: list.php?error=notFound');
	}
	
	if(isset($_POST['submit'])){
	
		$name = addslashes($_POST['name']);
		$fname = addslashes($_POST['fname']);
		$mname = addslashes($_POST['mname']);
		$gender = addslashes($_POST['gender']);
		$blood = addslashes($_POST['blood']);
		$bdate = addslashes($_POST['bdate']);
		$religion =addslashes($_POST['religion']);
		$address = addslashes($_POST['address']);
		$dept = addslashes($_POST['dept']);
		
		mysqli_query($mysqli,"UPDATE `employee` SET `name` = '$name',`fname` = '$fname',`mname` = '$mname',`bdate` = '$bdate',`gender` = '$gender',`blood` = '$blood',`religion` = '$religion',`address` = '$address',`dept` = '$dept' WHERE `id` ='$id';");
		
		header('Location: list.php?msg=update');
	}
	
?>
<?php include('header.php'); ?>
	
	<h2 align="center">Update Student Information</h2>
	<div align="center">
		<form method="post" action="" >
			<table cellspacing="0" cellpadding="5" width="80%">
					
					<tr>
						<td width="190px"><b>Name:</b></td>
						<td><input type="text" name="name" size="40" value="<?php echo $name; ?>" /></td>
					</tr>
					
					<tr>
						<td><b>Father's Name:</b></td>
						<td><input type="text" name="fname" size="40" value="<?php echo $fname; ?>" /></td>
					</tr>
					
					<tr>
						<td><b>Mother's Name:</b></td>
						<td><input type="text" name="mname" size="40" value="<?php echo $mname; ?>" /></td>
					</tr>
					
					<tr>
						<td><b>Birth Date:</b></td>
						<td><input type="text" name="bdate" size="10" value="<?php echo $bdate; ?>" /> (YYYY-MM-DD)</td>
					</tr>
					
					<tr>
						<td><b>Blood:</b></td>
						<td>
							<input type="text" name="blood" size="8" value="<?php echo $blood; ?>" />
						</td>
					</tr>
					
					<tr>
						<td><b>Gender:</b></td>
						<td>
							<label><input type="radio" name="gender" value="Male" <?php if($gender == 'Male') echo 'checked="checked"'; ?> />Male</label>
							<label><input type="radio" name="gender" value="Female" <?php if($gender == 'Female') echo 'checked="checked"'; ?> />Female</label>
						</td>
					</tr>
					
					<tr>
						<td><b>Religion:</b></td>
						<td>
							<input type="text" name="religion" size="40" value="<?php echo $religion; ?>" />
						</td>
					</tr>
					
					<tr>
						<td><b>Department:</b></td>
						<td>
							<input type="text" name="dept" size="40" value="<?php echo $dept; ?>" />
						</td>
					</tr>
					
					<tr>
						<td><b>Address:</b></td>
						<td><textarea name="address" cols="30" rows="2"><?php echo $address; ?></textarea></td>
					</tr>
					
				</table>
				<input type="submit" name="submit" value="Submit" />
		</form>
	</div>
</center>
<?php include('footer.php'); ?>