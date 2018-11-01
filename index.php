<?php 
include_once('db.php');
print_r($query->fetch_assoc());
?>
<h1>Hello World!</h1>

<table>
	<thead>
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
		</tr>
	</thead>
<?php	foreach($query->fetch_assoc() as $row){?>
	<tr>
		<td><?php echo $row->firstname?></td>
		<td><?php echo $row->lnamename?></td>
	</tr>
<?php	} ?>
</table>