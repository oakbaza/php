<?php
function connect(){
	$servername = getenv("MYSQL_SERVICE_HOST");
	$username ="root";
	$password = getenv("database-root-password");
	$dbname = getenv("database-name");
	$con = mysqli_connect($servername,$username,$password,$dbname);
	return $con;
}

function get_all($con){
	$sql = "SELECT * FROM person";
	$query = mysqli_query($con,$sql);
	return $query;
}

function insert($con,$fname,$lname){
	$sql = "INSERT INTO person (firsname,lastname)
	VALUES ($fname, $lname)";
	mysqli_query($con,$sql);
}
?>
