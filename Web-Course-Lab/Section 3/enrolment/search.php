<?php 
	@session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
	
	include('db.php');
	
	$qry = '';
	if(!empty($_GET['name'])){
		$name = $_GET['name'];
		$str = strtolower(addslashes($name));
		$qry .= " AND LOWER(`name`) LIKE '%$str%' ";
	}else{
		$name = '';
	}
	
	if(!empty($_GET['fname'])){
		$fname = $_GET['fname'];
		$str = strtolower(addslashes($fname));
		$qry .= " AND LOWER(`fname`) LIKE '%$str%' ";
	}else{
		$fname = '';
	}
	
	if(!empty($_GET['address'])){
		$address = $_GET['address'];
		$str = strtolower(addslashes($address));
		$qry .= " AND LOWER(`address`) LIKE '%$str%' ";
	}else{
		$address = '';
	}
	
	if(!empty($_GET['gender'])){
		$gender = $_GET['gender'];
		$str = strtolower(addslashes($gender));
		$qry .= " AND `gender` = '$gender' ";
	}else{
		$gender = '';
	}
	if(!empty($_GET['dept'])){
		$dept = $_GET['dept'];
		$str = strtolower(addslashes($dept));
		$qry .= " AND LOWER(`dept`) LIKE '%$str%' ";
	}else{
		$dept = '';
	}
?>
<?php include('header.php'); ?>
<center>
	<h2>Search Information </h2>
	<div style="width:650px; background-color:#E5E5E5; padding: 10px;">
		<form method="get" action="" >
			<table cellspacing="0" cellpadding="5">
					
					<tr>
						<td width="190px"><b>Name:</b></td>
						<td><input type="text" name="name" size="40" value="<?php echo $name; ?>" /></td>
					</tr>
					
					<tr>
						<td><b>Father's Name:</b></td>
						<td><input type="text" name="fname" size="40" value="<?php echo $fname; ?>" /></td>
					</tr>
					<tr>
						<td><b>Department</b></td>
						<td><input type="text" name="dept" size="40" value="<?php echo $dept; ?>" /></td>
					</tr>
					<tr>
						<td><b>Gender:</b></td>
						<td>
							<label><input type="radio" name="gender" value="Male" <?php if($gender == 'Male') echo 'checked="checked"'; ?> />Male</label>
							<label><input type="radio" name="gender" value="Female" <?php if($gender == 'Female') echo 'checked="checked"'; ?>/>Female</label>
						</td>
					</tr>
					
					<tr>
						<td><b>Address:</b></td>
						<td><input type="text" name="address" size="40" value="<?php echo $address; ?>" /></td>
					</tr>
					<tr><td colspan="2" align="center">
						<input type="submit" name="search" value="Search" />
					</td></tr>
				</table>
		</form>
	</div>
	
	<br/>
	
	<?php if(isset($_GET['search']) && strlen($qry)>0){ ?>
	
	<h2 align="center">Search Results</h2>
	
	<table class="list" cellspacing="0" cellpadding="5" width="80%">
		<thead>
			<tr>
				<th align="left">ID</th>
				<th align="left">Name</th>
				<th align="left">Birth Date</th>
				<th align="left">Department</th>
				<th align="left">Address</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		
		<?php 
		
		$query = mysqli_query($mysqli,"SELECT * FROM `employee` WHERE 1=1 $qry ORDER BY name ASC");
		
		while($row = mysqli_fetch_object($query)){
			
			//$bgcolor = ($i%2 == 0)?'#F5F5F5':'#FFFFFF';
			
			echo '<tr>
					<td>'.$row->id.'</td>
					<td>'.$row->name.'</td>
					<td>'.$row->bdate.'</td>
					<td>'.$row->dept.'</td>
					<td>'.$row->address.'</td>
					
					
					<td><a href="update.php?id='.$row->id .'">Update</a> | <a href="delete.php?id='.$row->id .'">Delete</a> </td>
					
				</tr>';
				
			//$i++;
		}
		?>
		</tbody>
	</table>
	<?php } ?>
	
</center>
<?php include('footer.php'); ?>