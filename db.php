<?php
$servername = getenv("MYSQL_SERVICE_HOST");
$username ="root";
$password = getenv("database-root-password");
$dbname = getenv("database-name");
echo $servername."<br>".$username."<br>".$password."<br>";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT * 
		FROM person";
$query = $conn->query($sql);
print_r($query->fetch_assoc());
?>
