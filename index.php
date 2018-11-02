<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
th,td{
	text-align:center;
}
thead{
	background-color: #03a9f4;
	color:white;
}
</style>
<?php 
include_once('db.php');
$t7_db = connect();
$obj_ps = get_all($t7_db);
?>
<div style="margin-top:64px">
</div>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th class="col-md-">Firstname</th>
				<th>Lastname</th>
			</tr>
		</thead>
		<tbody>
	<?php	while($obj = mysqli_fetch_object($obj_ps)){?>
		<tr>
			<td><?php echo $obj->firstname;?></td>
			<td><?php echo $obj->lastname;?></td>
		</tr>
	<?php	} ?>
		</tbody>
	</table> 
</div>