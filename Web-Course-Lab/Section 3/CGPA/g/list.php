<?php 
	@session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
	include('header.php'); 
    include_once('db.php');
	$result = mysqli_query($mysqli, "SELECT * FROM student ORDER BY id DESC");
	
	?>
<h2 align="center"> Calculated CGPA </h2>
<table class="list" cellspacing="0" cellpadding="5" width="100%">
	<thead>
		<tr>
			<th align="left" bgcolor="#DFDFDF">Name</th>
			<th align="left" bgcolor="#DFDFDF">CGPA</th>
			<th align="left" bgcolor="#DFDFDF">Grade</th>
			
		</tr>
	</thead>
	<tbody>
	<?php 
		while($fetch = mysqli_fetch_array($result)){
					
	    $final = (($fetch['s1']*$fetch['c1'])+($fetch['s2']*$fetch['c2'])+($fetch['s3']*$fetch['c3'])+($fetch['s4']*$fetch['c4'])+($fetch['s5']*$fetch['c5']))/($fetch['c1']+$fetch['c2']+$fetch['c3']+$fetch['c4']+$fetch['c5']);
			
		         echo "<tr>";
				 echo "<td>".$fetch['name']."</td>";
           		 echo "<td>".round($final, 2)."</td>";
				 
		}
	?>
	</tbody>
</table>
