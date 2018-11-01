<?php 
include_once('db.php');
$t7_db = connect();
$obj_ps = get_all($t7_db);
?>
<h1>Hello World!</h1>

<<table border="1px black">
	<thead>
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
		</tr>
	</thead>
<?php	while($obj = mysqli_fetch_object($obj_ps)){?>
	<tr>
		<td><?php echo $obj->firstname;?></td>
		<td><?php echo $obj->lastname;?></td>
	</tr>
<?php	} ?>
</table> 