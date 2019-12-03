<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "table";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM huson_2019 ";

 
if ($conn->query($sql) == TRUE) {
    echo "Record deleted successfully";
}
 else
 {
    echo "Error deleting record: " . $conn->error;
}
header("location:main page.php");

$conn->close();
?>