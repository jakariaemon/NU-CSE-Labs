<?php 
	@session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
	include('header.php'); 
include_once('db.php');
	$result = mysqli_query($mysqli, "SELECT * FROM employee ORDER BY id DESC");
	?>
<h2 align="center">List of Students </h2>
<table class="list" cellspacing="0" cellpadding="5" width="100%">
	<thead>
		<tr>
			<th align="left" bgcolor="#DFDFDF">ID</th>
			<th align="left" bgcolor="#DFDFDF">Name</th>
			<th align="left" bgcolor="#DFDFDF">Gender</th>
			<th align="left" bgcolor="#DFDFDF">Department</th>
			<th align="left" bgcolor="#DFDFDF">Address</th>
			<th align="left" bgcolor="#DFDFDF">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		while($res=mysqli_fetch_array($result)) {
			
		         echo "<tr>";
				 echo "<td>".$res['id']."</td>";
           		 echo "<td>".$res['name']."</td>";
				 echo "<td>".$res['gender']."</td>";
           		 echo "<td>".$res['dept']."</td>";	
				 echo "<td>".$res['address']."</td>";		 	 
				
			echo "<td><a href=\"update.php?id=$res[id]\">Update</a> | <a href=\"delete.php?id=$res[id]\">Delete</a> </td></tr>";
	
				}
	
	?>
	</tbody>
</table>
<?php include('footer.php'); ?>