<?php
$servername = getenv("MYSQL_SERVICE_HOST");
$username ="root";
$password = "root";
$dbname = "project";
echo $servername."<br>".$username."<br>".$password."<br>";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

function get_all(){
	$sql = "SELECT * 
			FROM person";
	$query = $conn->query($sql);
	return $query;
}
?>
