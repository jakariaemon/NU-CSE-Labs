 <?php 	@session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
 			
	if(isset($_POST['submit'])){
		include('db.php');
		$name = $_POST['name'];
		$s1 = $_POST['s1'];
		$s2 = $_POST['s2'];
		$s3= $_POST['s3'];
		$s4 = $_POST['s4'];
		$s5 = $_POST['s5'];
		$c1 = $_POST['c1'];
		$c2 = $_POST['c2'];
		$c3 = $_POST['c3'];
		$c4 = $_POST['c4'];
		$c5 = $_POST['c5'];
		

		
		
	 $result =mysqli_query($mysqli,"INSERT INTO `student` (`name`,`s1`, `s2`, `s3`, `s4`, `s5`, `c1`, `c2`, `c3`, `c4`,`c5`) VALUES ('$name','$s1','$s2', '$s3', '$s4', '$s5', '$c1','$c2', '$c3','$c4','$c5');") or die(mysql_error());
		echo "<font color='white'>Data added successfully.";
       
	}
	
    

?>
<?php include('header.php'); ?>
<center>
	<h2> Grade and Credit Entry Form </h2>
	<div style="width:650px; background-color:#E5E5E5; padding: 10px;">
		<form method="post" name="form" action="";">
			<table cellspacing="0" cellpadding="5" width="100%">
					
				    <tr> 
					  <td width="190px"><b>Name :</b></td>
					  <td><input type="text" name="name">
					    </td> 
					   </tr>
					<tr>
						<td width="190px"><b>Subject 1:</b></td>
						<td> <select name="s1">
								<option>--</option>
								<option value="4">a+</option>
								<option value="3.75">a</option>
								<option value="3.50">a-</option>
								<option value="3.25">b+</option>
								<option value="3.00">b</option>
								<option value="2.75">b-</option>
								<option value="2.50">c+</option>
								<option value="2.25">c</option>
								<option value="2.00">d</option>
								<option value="0">f</option>
								</select></td>
					</tr>
					<tr>
						<td><b>Credit :</b></td>
						<td>
							<label><input type="radio" name="c1" value="3" />3</label>
							<label><input type="radio" name="c1" value="1.5" />1.5</label>
							<label><input type="radio" name="c1" value="6" />6</label>
						</td>
					</tr>
					
					
					<tr>
						<td width="190px"><b>Subject 2:</b></td>
						<td> <select name="s2">
								<option>--</option>
								<option value="4">a+</option>
								<option value="3.75">a</option>
								<option value="3.50">a-</option>
								<option value="3.25">b+</option>
								<option value="3.00">b</option>
								<option value="2.75">b-</option>
								<option value="2.50">c+</option>
								<option value="2.25">c</option>
								<option value="2.00">d</option>
								<option value="0">f</option>
								</select></td>
					</tr>
					<tr>
						<td><b>Credit:</b></td>
						<td>
							<label><input type="radio" name="c2" value="3" />3</label>
							<label><input type="radio" name="c2" value="1.5" />1.5</label>
							<label><input type="radio" name="c2" value="6" />6</label>
						</td>
					</tr>
					
					<tr>
						<td width="190px"><b>Subject 3:</b></td>
						<td> <select name="s3">
								<option>--</option>
								<option value="4">a+</option>
								<option value="3.75">a</option>
								<option value="3.50">a-</option>
								<option value="3.25">b+</option>
								<option value="3.00">b</option>
								<option value="2.75">b-</option>
								<option value="2.50">c+</option>
								<option value="2.25">c</option>
								<option value="2.00">d</option>
								<option value="0">f</option>
								</select></td>
					</tr>
					<tr>
						<td><b>Credit:</b></td>
						<td>
							<label><input type="radio" name="c3" value="3" />3</label>
							<label><input type="radio" name="c3" value="1.5" />1.5</label>
							<label><input type="radio" name="c3" value="6" />6</label>
						</td>
					</tr>
					
					<tr>
						<td width="190px"><b>Subject 4:</b></td>
						<td> <select name="s4">
								<option>--</option>
								<option value="4">a+</option>
								<option value="3.75">a</option>
								<option value="3.50">a-</option>
								<option value="3.25">b+</option>
								<option value="3.00">b</option>
								<option value="2.75">b-</option>
								<option value="2.50">c+</option>
								<option value="2.25">c</option>
								<option value="2.00">d</option>
								<option value="0">f</option>
								</select></td>
					</tr>
					
				<tr>
						<td><b>Credit:</b></td>
						<td>
							<label><input type="radio" name="c4" value="3" />3</label>
							<label><input type="radio" name="c4" value="1.5" />1.5</label>
							<label><input type="radio" name="c4" value="6" />6</label>
						</td>
					</tr>
				<tr>
						<td width="190px"><b>Subject 5:</b></td>
						<td> <select name="s5">
								<option>--</option>
								<option value="4">a+</option>
								<option value="3.75">a</option>
								<option value="3.50">a-</option>
								<option value="3.25">b+</option>
								<option value="3.00">b</option>
								<option value="2.75">b-</option>
								<option value="2.50">c+</option>
								<option value="2.25">c</option>
								<option value="2.00">d</option>
								<option value="0">f</option>
								</select></td>
					</tr>
				
					<tr>
						<td><b>Credit:</b></td>
						<td>
							<label><input type="radio" name="c5" value="3" />3</label>
							<label><input type="radio" name="c5" value="1.5" />1.5</label>
							<label><input type="radio" name="c5" value="6" />6</label>
						</td>
					</tr>
					
					
					
					
		  </table>
				<input type="submit" name="submit" value="Submit" />
		</form>
	</div>
</center>

<?php include('footer.php'); ?>