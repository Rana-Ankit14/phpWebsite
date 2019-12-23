<?php
	$rid=$_SESSION['rid'];
	$query2="select * from food where rid='$rid'";
	$run2=mysqli_query($link,$query2);
?>


<table class="table table-bordered table-hover table-striped" style="background-color: white;">
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Type</th>
		<th>Action</th>
	</tr>

	<?php
		while($array=mysqli_fetch_assoc($run2)){
			?>
			<tr>
				<td><?php echo $array['name']; ?></td>
				<td><?php echo $array['price']; ?></td>
				<td><?php echo $array['type']; ?></td>
				<td><!--<a href="updateFood.php?id=<?php echo $array['foodID'];?>">Update</a>
			 		<br><br>-->
			 		<a href="deleteFood.php?id=<?php echo $array['foodID'];?>">Delete </a>
			 	</td>
			</tr>
			
	<?php
		}
	?>
	
</table>