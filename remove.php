<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elec-era";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql='DELETE FROM repair_req WHERE reqid='.$_GET['reqid'].'';
$result = $conn->query($sql);
header("Location: orders.php");
?>